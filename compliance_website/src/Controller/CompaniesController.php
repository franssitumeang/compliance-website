<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

class CompaniesController extends AppController{

    public $paginate = [
        'limit' => 10,
        'order' => [
            'Companies.company_name' => 'asc'
        ]
    ];

    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('Paginator');
    }

    public function beforeFilter(Event $event){
        $this->viewBuilder()->layout('admin');
    }

    public function index()
    {
        $title = "Perusahaan";
        $this->set('title', $title);
        $companies = $this->paginate('Companies');
        $company = $this->Companies->newEntity();
        $paginate = $this->Paginator->getPagingParams()["Companies"];
        $this->set(compact('companies','company','paginate'));
        
        $this->viewBuilder()->templatePath('Admins');
        $this->render('company');
    }
    
    
    public function add($id = null){
        if($id == null){
            $company = $this->Companies->newEntity();
        }else{
            $company = $this->Companies->get($id);
        }
        if ($this->request->is('post')) {
            $company = $this->Companies->patchEntity($company, $this->request->getData());
            if ($this->Companies->save($company)) {
                $this->Flash->success(__('The company has been saved.'));
            }else{
                $this->Flash->error(__('The company could not be saved. Please, try again.'));
            }
            return $this->redirect(['action' => 'index']);
        }
    }
    public function delete($id = null)
    {
        if ($this->request->is('post')) {
            $company = $this->Companies->get($id);
            if ($this->Companies->delete($company)) {
                $this->Flash->success(__('The company has been deleted.'));
                return $this->redirect(['action' => 'index']);
            }
        }
        
    }
}