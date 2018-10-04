<?php
namespace App\Controller\Admin;

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
        $searchKey = $this->request->query('search_key');
        $attribute = $this->request->query('attribute');
        if($searchKey) {
            $this->paginate = [
                'limit' => '10',
                'order' => [
                    'Roles.name' => 'asc'
                ],
                'conditions' => [$attribute.' LIKE' => '%'.$searchKey.'%']
            ];
        }
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
            $this->Flash->success(__('The Role has been saved.'));
        } else {
            $this->Flash->success(__('The Role could not be saved. Please, try again.'));
        }
        
        return $this->redirect(['action' => 'index']);
    }

    public function delete($id) {
        $this->request->allowMethod(['post', 'delete']);
        $role = $this->Roles->get($id);
        if ($this->Roles->delete($role)) {
            $this->Flash->success(__('The role has been deleted.'));
            return $this->redirect(['action' => 'index']);
        }
    }
}