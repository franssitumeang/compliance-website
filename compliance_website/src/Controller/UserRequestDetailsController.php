<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

class UserRequestDetailsController extends AppController{


    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('Paginator');
    }

    public function index($id=null)
    {
        $title = "List Approval";
        $this->set('title', $title);
        $this->paginate = [
            'contain' => ['UserRequestHeaders']
        ];
        $userRequestDetails = $this->UserRequestDetails->find('all', [
            'conditions' => ['UserRequestDetails.user_request_header_id' => $id]
        ]);
        $userRequestDetails = $this->paginate($userRequestDetails);
        $userRequestDetail = $this->UserRequestDetails->newEntity();
        $paginate = $this->Paginator->getPagingParams()["UserRequestDetails"];
        $this->set(compact('userRequestDetails','userRequestDetail','paginate'));
        
        $this->viewBuilder()->templatePath('Publics');
        $this->render('user_request_details_list');
    }


}
?>