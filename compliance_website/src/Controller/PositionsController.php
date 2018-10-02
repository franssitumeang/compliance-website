<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

class PositionsController extends AppController
{
    public function beforeFilter(Event $event){
        $this->viewBuilder()->layout('admin');
    }
    public function index() {
        $this->loadComponent('Paginator');
        $title = "Jabatan";
        $this->set('title', $title);
        
        $positions = $this->Paginator->paginate($this->Positions->find());
        $this->set(compact('positions'));
        //kondisi
        $this->viewBuilder()->templatePath('Admins');
        $this->render('position');
    }
}