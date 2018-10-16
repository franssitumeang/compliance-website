<?php
namespace App\Controller\Publics;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;

class DiscussionParticipantsController extends AppController{

    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('Paginator');
        $this->loadComponent('RequestHandler');
    }

    public function beforeRender(Event $event)
    {
        // Note: These defaults are just to get started quickly with development
        // and should not be used in production. You should instead set "_serialize"
        // in each action as required.
        if (!array_key_exists('_serialize', $this->viewVars) &&
            in_array($this->response->type(), ['application/json', 'application/xml'])
        ) {
            $this->set('_serialize', true);
        }
    }
    public function index(){

        $title = "Partisipan diskusi";
        $this->set('title', $title);
        $this->paginate = [
            'contain' => ['Users']
        ];
        $userTable = TableRegistry::get('Users');
        $discussionParticipants = $this->DiscussionParticipants->find('all', [
            'contain' => ['Users']
        ]);
        $users = $userTable->find('all', [
            'contain'=>'Departments'
        ]);

        $title = "Halaman Diskusi";
        $this->set('title', $title);
      
        $discussionParticipant = $this->DiscussionParticipants->newEntity();
        
        $this->set(compact('discussionParticipant','paginate', 'users'));
        $this->viewBuilder()->templatePath('Publics/DiscussionParticipants');
        $this->render('index');

    }

    public function search(){
        $this->loadComponent('RequestHandler');
        $userTable = TableRegistry::get('Users');
    if ($this->request->is('ajax')) 
    {
        $name = $this->request->query['term'];
        $resultArr = $this->Users
    ->find()
    ->where(
        ['Users.name LIKE' => ($name . '%')],
        ['Users.name' => 'string']
    );
  
        $resultsArr = [];
        foreach ($resultArr as $result) 
        {
             $resultsArr[] = (strval($result['name']));
        }

        $this->set('resultsArr', $resultsArr);
        // This line is what handles converting your array into json
        // To get this to work you must load the request handler
        $this->set('_serialize', ['resultsArr']);


    }
        // $this->request->allowMethod('ajax');
        // $userTable = TableRegistry::get('Users');
        // $keyword =$this->request->query('keyword');
        // $query = $userTable->find('all',[
        //     'conditions'=>['name LIKE'=>'%'.$keyword.'%'],
        // ]);


    }

}