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
        $role = $this->Roles->newEntity();
        $this->loadComponent('Paginator');
        $title = "Roles";
        $this->set('title', $title);
        
        $roles = $this->Paginator->paginate($this->Roles->find());
        $this->set(compact('roles'));
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
            return $this->redirect(['action' => 'index']); 
        } else {
            $this->Flash->error(__('Gagal Menyimpan'));
            return $this->redirect(['action' => 'index']); 
        }
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