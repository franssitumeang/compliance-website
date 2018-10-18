<?php
namespace App\Controller\Admin;

use App\Controller\AppController;
use Cake\Event\Event;

class PositionsController extends AppController{

    public $paginate = [
        'limit' => 10,
        'order' => [
            'Positions.name' => 'asc'
        ],
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
                    'Positions.name' => 'asc'
                ],
                'conditions' => [$attribute.' LIKE' => '%'.$searchKey.'%']
            ];
        }       
        $title = "Jabatan";
        $this->set('title', $title);
        $positions = $this->paginate('Positions');
        $position = $this->Positions->newEntity();
        $paginate = $this->Paginator->getPagingParams()["Positions"];

        $this->set(compact('positions','position','paginate'));
        
        $this->viewBuilder()->templatePath('Admins');
        $this->render('position');
    }
    
    public function add($id = null){
        if($id == null){
            $position = $this->Positions->newEntity();
        }else{
            $position = $this->Positions->get($id);
        }
        if ($this->request->is('post')) {
            $position = $this->Positions->patchEntity($position, $this->request->getData());
            if ($this->Positions->save($position)) {
                $this->Flash->success(__('The position has been saved.'));
            }else{
                $this->Flash->error(__('The position could not be saved. Please, try again.'));
            }
            return $this->redirect(['action' => 'index']);
        }
    }

    public function delete($id = null)
    {
        if ($this->request->is('post')) {
            $position = $this->Positions->get($id);
            if ($this->Positions->delete($position)) {
                $this->Flash->success(__('The positions has been deleted.'));
                return $this->redirect(['action' => 'index']);
            }
        }
        
    }

    
    // create your authentication here
    public function isAuthorized($user) {
        return true;
    }
}