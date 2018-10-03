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
        
        $userRequestDetails = $this->paginate($this->UserRequestDetails);
        $userRequestDetail = $this->UserRequestDetails->newEntity();
        $paginate = $this->Paginator->getPagingParams()["UserRequestDetails"];
        $this->set(compact('userRequestDetails','userRequestDetail','paginate'));
        
        $this->viewBuilder()->templatePath('Publics');
        $this->render('user_request_details_list');
    }

}
?>