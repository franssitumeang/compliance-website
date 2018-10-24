<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;

class PublicsController extends AppController
{
    public function initialize()
    {
        parent::initialize();
        // $this->Auth->allow('logout');
        
    }

    public function logout()
    {
        $this->Flash->msg_success('You are now logged out.');
        return $this->redirect($this->Auth->logout());
    }


    public function login()
    {
        $title = "Login Wahana";
        $this->set('title', $title);
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            }
            debug($user);
            $this->Flash->msg_error('Your username or password is incorrect.');
        }
        $this->viewBuilder()->templatePath('Publics');
        $this->render('login');
    }


    public function index()
    {
        $title = "Home";
        $this->set('title', $title);

        $articles = $this->paginate('Articles');
        $jsonArticles = json_encode($articles);
        $paginate = $this->Paginator->getPagingParams()["Articles"];
       
        $this->set(compact('articles', 'paginate', 'jsonArticles'));
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
        $title = "View - " . $article . title;
        $this->set(compact('title', 'article'));
        $this->viewBuilder()->templatePath('Publics');
        $this->render('view');
    }

    
    // create your authentication here
    public function isAuthorized($user) {
        return true;
    }

    public function profile(){
        $title = "Profile";
        $this->paginate = [
            'contain' => array('ChildCompanies','ParentCompanies'),
        ];
        $companies = $this->paginate('Companies');
        $this->set(compact('title','companies'));
        $this->viewBuilder()->templatePath('Publics');
        $this->render('profile');
    }

}