<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

class RolesController extends AppController
{
    public function beforeFilter(Event $event){
        $this->viewBuilder()->layout('admin');
    }
    public function index() {
        $this->loadComponent('Paginator');
        $title = "Roles";
        $this->set('title', $title);
        
        $roles = $this->Paginator->paginate($this->Roles->find());
        $this->set(compact('roles'));
        //kondisi
        $this->viewBuilder()->templatePath('Admins');
        $this->render('role');
    }

    public function add() {
        $role = $this->Roles->newEntity();
        $role = $this->Roles->patchEntity($role, $this->request->getData());
        if($this->Roles->save($role)) {
            return $this->redirect(['action' => 'index']); 
        } else {
            $this->Flash->error(__('Gagal Menyimpan'));
        }
    }
}