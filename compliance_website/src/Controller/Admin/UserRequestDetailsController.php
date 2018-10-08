<?php
namespace App\Controller\Admin;

use App\Controller\AppController;
use Cake\Event\Event;

class UserRequestDetailsController extends AppController
{

    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('Paginator');
        $this->loadModel('UserRequestDetails');
    }

    public function beforeFilter(Event $event){
        $this->viewBuilder()->layout('admin');
    }

    public function index()
    {  
        $title = "List User Request Detail";
        $this->set('title', $title);
        $this->paginate = [
            'contain' => ['UserRequestHeaders']
        ];
        $searchKey = $this->request->query('search_key');
        $attribute = $this->request->query('attribute');
        if($searchKey){
            $this->paginate = [
                'limit' => 10,
                'order' => [
                    'UserRequestDetails.UserRequestHeaders.doc_title' => 'asc'
                ],
                'conditions' => [$attribute.' LIKE' => '%'.$searchKey.'%'],
                'contain' => ['UserRequestHeaders']
            ];
        }           
        $userRequestDetails = $this->paginate($this->UserRequestDetails);
        $userRequestDetail = $this->UserRequestDetails->newEntity();
        $paginate = $this->Paginator->getPagingParams()["UserRequestDetails"];
        $this->set(compact('userRequestDetails', 'userRequestDetail', 'paginate'));
       
        $this->viewBuilder()->templatePath('Admins');
        $this->render('user_request_detail');
    }
}
        