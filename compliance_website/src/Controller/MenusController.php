<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

class MenusController extends AppController
{
    public function beforeFilter(Event $event){
        $this->viewBuilder()->layout('admin');
    }
    public function index()
    {
        $title = "Menu";
        $this->set('title', $title);
        
        //kondisi
        $this->viewBuilder()->templatePath('Admins');
        $this->render('menu');
    }   
}