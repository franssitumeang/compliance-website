<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

class AdminsController extends AppController
{
    public function beforeFilter(Event $event){
        $this->viewBuilder()->layout('admin');
    }
    public function index()
    {
        $title = "Dashboard";
        $this->set('title', $title);
        $this->viewBuilder()->templatePath('Admins');
        $this->render('dashboard');
    }

    
}