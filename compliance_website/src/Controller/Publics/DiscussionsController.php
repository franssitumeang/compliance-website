<?php
namespace App\Controller\Publics;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;

class DiscussionsController extends AppController{


    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('Paginator');
        $this->loadModel('UserRequestDetails');
        $this->loadModel('DiscussionParticipants');
    }

    public function index($id=null){
        $title = "List Discussions";
        $this->set('title', $title);
        $this->paginate = [
            'contain' => ['UserRequestDetails','DiscussionParticipants']
        ];
        $userRequestDetailsTable = TableRegistry::get('UserRequestDetails');
        $discussionParticipantsTable = TableRegistry::get('DiscussionParticipants');
        $usersTable = TableRegistry::get('Users');
        $discussions = $this->Discussions->find('all', [
            'conditions' => ['Discussions.user_request_detail_id' => $id],
            'contain' => ['UserRequestDetails', 'DiscussionParticipants'=>['Users']]
        ]);
        $discussionParticipants = $discussionParticipantsTable->find('all', [
            'conditions' => ['DiscussionParticipants.user_request_header_id' => $id],
            'contain' => ['Users']
        ]);
        
        $title = "Diskusi";
        $this->set('title', $title);
        $discussions = $this->paginate($discussions);
        $discussion = $this->Discussions->newEntity();
        $paginate = $this->Paginator->getPagingParams()["Discussions"];
        $userRequestDetails = $userRequestDetailsTable->get($id, [
            'contain' => ['UserRequestHeaders'=>['Users'=>['Departments']]]
        ]);
        
        $this->set(compact('discussions','discussion','paginate', 'userRequestDetails','discussionParticipants','users'));
        $this->viewBuilder()->templatePath('Publics/Discussions');
    }

    public function view($id = null)
    {
        $discussion = $this->Discussions->get($id, [
            'contain' => ['UserRequestDetails','DiscussionParticipants']
        ]);

        $this->set('discussion', $discussion);
        $this->viewBuilder()->templatePath('Publics/Discussions');
        return $this->redirect(['action' => 'index']);
    }

    public function add()
    {
        $discussion = $this->Discussions->newEntity();
        if ($this->request->is('post')) {
            $discussion = $this->Discussions->patchEntity($discussion, $this->request->getData());
            if ($this->Discussions->save($discussion)) {
                $this->Flash->success(__('The comment has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The comment could not be saved. Please, try again.'));
        }
        $this->set(compact('dicussion'));
    }

    public function getDepartmentRequest($id = null)
    {
        $usersTable = TableRegistry::get('Users');
        $users = $usersTable->find('all',[
            'contain' =>['Departments'=>['Companies']],
            'conditions' => ['Users.department_id' => $id],
        ]);
    }
}

?>