<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

class UserDokumensController extends AppController
{
    public function beforeFilter(Event $event){
        $this->viewBuilder()->layout('admin');
    }
    public function index()
    {
        $title = "User Dokumen";
        $this->set('title', $title);
        
        //kondisi
        $this->viewBuilder()->templatePath('Admins');
        $this->render('user_dokumen');
    }   
}