<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;
class PublicsController extends AppController
{
    public function index()
    {
        $title = "Home";
        $this->set('title', $title);
        $articles = $this->paginate('Articles');
        $jsonArticles = json_encode($articles);
        $paginate = $this->Paginator->getPagingParams()["Articles"];
        $this->set(compact('articles','paginate','jsonArticles'));
    }


    public function approval()
    {
        $title = "Approval";
        $this->set('title', $title);
        $this->viewBuilder()->templatePath('Publics');
        $this->render('approvals');
    }
   
    public function view($id = null)
    {
        $articleTable = TableRegistry::get('Articles');
        $article = $articleTable->get($id);
        $title = "View - " .$article.title;
        $this->set(compact('title', 'article'));
        $this->viewBuilder()->templatePath('Publics');
        $this->render('view');

    }

    



}