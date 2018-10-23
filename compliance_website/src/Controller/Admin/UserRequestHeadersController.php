<?php
namespace App\Controller\Admin;

use App\Controller\AppController;
use Cake\Event\Event;

class UserRequestHeadersController extends AppController
{

    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('Paginator');
        $this->loadModel('UserRequestHeaders');
    }

    public function beforeFilter(Event $event){
        $this->viewBuilder()->layout('admin');
    }

    public function index()
    {
        
        $title = "List Approval";
        $this->set('title', $title);
        $this->paginate = [
            'contain' => ['UserDocCategories', 'UserDocTypes', 'Users', 'UserRequestReasons']
        ];
        $searchKey = $this->request->query('search_key');
        $attribute = $this->request->query('attribute');
        if($searchKey){
            $this->paginate = [
                'limit' => 10,
                'order' => [
                    'UserRequestHeaders.request_dates' => 'asc'
                ],
                'conditions' => [$attribute.' LIKE' => '%'.$searchKey.'%'],
                'contain' => ['UserDocCategories', 'UserDocTypes', 'Users', 'UserRequestReasons']
            ];
        }           
        $userRequestHeaders = $this->paginate($this->UserRequestHeaders);
        $userRequestHeader = $this->UserRequestHeaders->newEntity();
        $paginate = $this->Paginator->getPagingParams()["UserRequestHeaders"];
        $this->set(compact('userRequestHeaders', 'userRequestHeader', 'paginate'));
       
        $this->viewBuilder()->templatePath('Admins');
        $this->render('user_request_header');
    }


    
    // create your authentication here
    public function isAuthorized($user) {
        return true;
    }
   
}
        