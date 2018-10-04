<?php
namespace App\Controller\Admin;

use App\Controller\AppController;
use Cake\Event\Event;

class UserDocumentsController extends AppController
{
    public $paginate = [
        'limit' => 10,
        'order' => [
            'UserDocuments.name' => 'asc'
        ],
        'contain' => ['UserDocCategories', 'UserDocTypes']
    ];

    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('Paginator');
    }

    public function beforeFilter(Event $event){
        $this->viewBuilder()->layout('admin');
    }

    public function index()
    {
        $searchKey = $this->request->query('search_key');
        $attribute = $this->request->query('attribute');
        if($searchKey){
            $this->paginate = [
                'limit' => 10,
                'order' => [
                    'UserDocuments.name' => 'asc'
                ],
                'conditions' => [$attribute.' LIKE' => '%'.$searchKey.'%'],
                'contain' => ['UserDocCategories', 'UserDocTypes']
            ];
        }       
        $title = "User Dokumen";
        $this->set('title', $title);
        
        $userDocuments = $this->paginate('UserDocuments');
        $paginate = $this->Paginator->getPagingParams()["UserDocuments"];
        //kondisi
        $this->set(compact('userDocuments', 'paginate'));
        $this->viewBuilder()->templatePath('Admins');
        $this->render('user_document');
    }   
}