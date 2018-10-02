<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Fanys Controller
 *
 *
 * @method \App\Model\Entity\Fany[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FanysController extends AppController
{
    public function index()
    {
        $title = "Home";
        $this->set('title', $title);
        // $this->viewBuilder()->templatePath('Admins');
        // $this->render('dashboard');
    }


    public function listRequest()
    {
        $title = "List Request";
        $this->set('title', $title);
        $this->viewBuilder()->templatePath('Fanys');
        $this->render('list_request');
    }

    public function viewArticles()
    {
        $title = "View Articles";
        $this->set('title', $title);
        $this->viewBuilder()->templatePath('Fanys');
        $this->render('view_articles');
    }

    public function forum()
    {
        $title = "View Articles";
        $this->set('title', $title);
        $this->viewBuilder()->templatePath('Fanys');
        $this->render('forum');
    }

    public function allArticles()
    {
        $title = "Articles";
        $this->set('title', $title);
        $this->viewBuilder()->templatePath('Fanys');
        $this->render('articles');
    }

    public function allDocuments()
    {
        $title = "Documents";
        $this->set('title', $title);
        $this->viewBuilder()->templatePath('Fanys');
        $this->render('all_documents');
    }



}
