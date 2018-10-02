<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

class RolesController extends AppController
{
    public $paginate = [
        'limit' => 10,
        'order' => [
            'Roles.name' => 'asc'
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
    public function index() {
        $role = $this->Roles->newEntity();
        
        $title = "Roles";
        $this->set('title', $title);
        
        $roles = $this->paginate('Roles');
        $paginate = $this->Paginator->getPagingParams()["Roles"];
        $this->set(compact('roles', 'paginate'));
        $this->set('newRole', $role);
        //kondisi
        $this->viewBuilder()->templatePath('Admins');
        $this->render('role');
    }

    public function add($id = null) {
        $this->request->allowMethod(['post', 'put']);
        if(!empty($id)) {
            $role = $this->Roles->get($id);
        } else {
            $role = $this->Roles->newEntity();
        }
        $role = $this->Roles->patchEntity($role, $this->request->getData());
        if($this->Roles->save($role)) {
            $message = 'The Role has been saved.';
        } else {
            $message = 'The Role could not be saved. Please, try again.'; 
        }
        $this->Flash->set(__($message));
        return $this->redirect(['action' => 'index']);
    }

    public function delete($id) {
        $this->request->allowMethod(['post', 'delete']);
        $role = $this->Roles->get($id);
        if ($this->Roles->delete($role)) {
            $this->Flash->success(__('The {0} article has been deleted.', $role->name));
            return $this->redirect(['action' => 'index']);
        }
    }
}