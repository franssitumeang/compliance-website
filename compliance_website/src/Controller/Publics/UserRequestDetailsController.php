<?php
namespace App\Controller\Publics;

use App\Controller\AppController;
use Cake\Event\Event;

class UserRequestDetailsController extends AppController{

    public $paginate = [
        'limit' => 10,
        
    ];

    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('Paginator');
    }

    public function index($id)
    {
        $title = "List Approval";
        $this->set('title', $title);
        // $this->paginate = [
        //     'contain' => ['UserRequestHeaders']
        // ];
        $userRequestDetails = $this->UserRequestDetails->find('all', [
            'conditions' => ['UserRequestDetails.user_request_header_id' => $id]
        ]);

        $userRequestHeader = $this->UserRequestDetails->UserRequestHeaders->get($id);
        $userRequestDetails = $this->paginate($userRequestDetails);

        $newUserRequestDetail = $this->UserRequestDetails->newEntity();
        
        $paginate = $this->Paginator->getPagingParams()["UserRequestDetails"];
        
        $this->set(compact('userRequestDetails','newUserRequestDetail','paginate', 'userRequestHeader'));
        
        $this->viewBuilder()->templatePath('Publics/UserRequestDetails/');
    }

    public function view($id = null)
    {
        $userRequestDetail = $this->UserRequestDetail->get($id, [
            'contain' => ['UserRequestHeaders']
        ]);

        $this->set('userRequestDetail', $userRequestDetail);
    }



}
?>