<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

class PublicsController extends AppController
{
    public function index()
    {
        $title = "Home";
        $this->set('title', $title);
        $articles = $this->paginate('Articles');
        $paginate = $this->Paginator->getPagingParams()["Articles"];
        $this->set(compact('articles','paginate'));
    }


    public function approval()
    {
        $title = "Approval";
        $this->set('title', $title);
        $this->viewBuilder()->templatePath('Publics');
        $this->render('approvals');
    }


}