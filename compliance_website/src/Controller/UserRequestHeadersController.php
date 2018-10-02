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
        $userRequestHeaders = $this->paginate('UserRequestHeaders');
        $userRequestHeader = $this->UserRequestHeaders->newEntity();
        $paginate = $this->Paginator->getPagingParams()["UserRequestHeaders"];
        $this->set(compact('UserRequestHeaders','UserRequestHeader','paginate'));
        
        $this->viewBuilder()->templatePath('Publics');
        $this->render('user_request_headers_list');
    }

}
?>