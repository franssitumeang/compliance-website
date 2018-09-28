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

    }
}