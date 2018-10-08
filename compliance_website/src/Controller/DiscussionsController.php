<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

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
        $discussions = $this->Discussions->find('all', [
            'conditions' => ['Discussions.user_request_detail_id' => $id]
        ]);
        $title = "Halaman Diskusi";
        $this->set('title', $title);
        $discussions = $this->paginate('Discussions');
        $discussion = $this->Discussions->newEntity();
        $paginate = $this->Paginator->getPagingParams()["Discussions"];
        $this->set(compact('discussions','discussion','paginate'));
        
        $this->viewBuilder()->templatePath('Publics/Discussions');
        $this->render('index');

    }

    public function view($id = null)
    {
        $discussion = $this->Discussions->get($id, [
            'contain' => ['UserRequestDetails','DiscussionParticipants']
        ]);

        $this->set('discussion', $discussion);
        $this->viewBuilder()->templatePath('Publics/Discussions');
        $this->render('view');
    }

    
}

?>