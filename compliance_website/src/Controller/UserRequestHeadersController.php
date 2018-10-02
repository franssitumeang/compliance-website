<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

class UserRequestHeadersController extends AppController{


    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('Paginator');
    }

    public function index()
    {
        $title = "List Approval";
        $this->set('title', $title);
        $this->paginate = [
            'contain' => ['Users','Reasons']

        ];
        $userRequestHeaders = $this->paginate($this->UserRequestHeaders);
        $userRequestHeader = $this->UserRequestHeaders->newEntity();
        $paginate = $this->Paginator->getPagingParams()["UserRequestHeaders"];
        $this->set(compact('userRequestHeaders','userRequestHeader','paginate'));
        
        $this->viewBuilder()->templatePath('Publics');
        $this->render('user_request_headers_list');
    }

}
?>