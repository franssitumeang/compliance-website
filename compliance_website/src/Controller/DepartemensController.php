<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

class DepartemensController extends AppController{

    public $paginate = [
        'limit' => 10,
        'order' => [
            'Departemens.dept_name' => 'asc'
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
        $searchKey = $this->request->query('search_key');
        $attribute = $this->request->query('attribute');
        if($searchKey){
            $this->paginate = [
                'limit' => 10,
                'order' => [
                    'Departemens.dept_name' => 'asc'
                ],
                'conditions' => [$attribute.' LIKE' => '%'.$searchKey.'%']
            ];
        }       
        $title = "Departemen";
        $this->set('title', $title);
        $departemens = $this->paginate('Departemens');
        $departemen = $this->Departemens->newEntity();
        $paginate = $this->Paginator->getPagingParams()["Departemens"];
        $this->set(compact('departemens','departemen','paginate'));
        
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