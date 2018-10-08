<?php
namespace App\Controller\Admin;

use App\Controller\AppController;
use Cake\Event\Event;

class UserDocApprovalsController extends AppController
{

    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('Paginator');
        $this->loadModel('UserDocApprovals');
    }

    public function beforeFilter(Event $event){
        $this->viewBuilder()->layout('admin');
    }

    public function index()
    {  
        $title = "List Approval Dokumen";
        $this->set('title', $title);
        $this->paginate = [
            'contain' => ['UserRequestHeaders', 'Users']
        ];
        $searchKey = $this->request->query('search_key');
        $attribute = $this->request->query('attribute');
        if($searchKey){
            $this->paginate = [
                'limit' => 10,
                'order' => [
                    'UserDocApprovals.UserRequestHeaders.doc_title' => 'asc'
                ],
                'conditions' => [$attribute.' LIKE' => '%'.$searchKey.'%'],
                'contain' => ['UserRequestHeaders', 'Users']
            ];
        }           
        $userDocApprovals = $this->paginate($this->UserDocApprovals);
        $userDocApproval = $this->UserDocApprovals->newEntity();
        $paginate = $this->Paginator->getPagingParams()["UserDocApprovals"];
        $this->set(compact('userDocApprovals', 'userDocApproval', 'paginate'));
       
        $this->viewBuilder()->templatePath('Admins');
        $this->render('user_doc_approval');
    }
}
        