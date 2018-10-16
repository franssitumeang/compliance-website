<?php
namespace App\Controller\Admin;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;

class UsersController extends AppController{

    public $paginate = [
        'limit' => 10,
        'order' => [
            'Users.name' => 'asc'
        ],
        'contain' => array('Positions','Departments'=>['Companies'])
    ];

    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('Paginator');
    }

    public function beforeFilter(Event $event){
        $this->viewBuilder()->layout('admin');
    }

    public function index()
    {
        $searchKey = $this->request->query('search_key');
        $attribute = $this->request->query('attribute');
        if($searchKey){
            $this->paginate = [
                'limit' => 10,
                'order' => [
                    'Users.name' => 'asc'
                ],
                'conditions' => [$attribute.' LIKE' => '%'.$searchKey.'%']
            ];
        }       
        $title = "User";
        $this->set('title', $title);
        $users = $this->paginate('Users');
        $user = $this->Users->newEntity();
        $paginate = $this->Paginator->getPagingParams()["Users"];

        $companiesTable = TableRegistry::get('Companies');
        $companies = $companiesTable->find('all');
        $positionsTable = TableRegistry::get('Positions');
        $positions = $positionsTable->find('all');
        $departmentsTable = TableRegistry::get('Departments');
        $departments = $departmentsTable->find('all');
        $groupsTable = TableRegistry::get('Groups');
        $groups = $groupsTable->find('all');
        $allUser = $this->Users->find('all');


        $this->set(compact('users','user','paginate','companies','positions','departments','groups','allUser'));
        
        $this->viewBuilder()->templatePath('Admins');
        $this->render('user');
    }
    
    public function add($id = null){
        if($id == null){
            $user = $this->Users->newEntity();
        }else{
            $user = $this->Users->get($id);
        }
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData(), ['associated'=>['Groups']]);
            $user->password = "password";
            $user->is_login = 0;
            if ($this->Users->save($user, ['associated'=>['Groups']])) {
                $this->Flash->success(__('The user has been saved.'));
            }else{
                $this->Flash->error(__('The user could not be saved. Please, try again.'));
            }
            // if($this->Issue->save($this->request->data)
            return $this->redirect(['action' => 'index']);
            // return debug($user);
        }
    }

    public function delete($id = null)
    {
        if ($this->request->is('post')) {
            $user = $this->Users->get($id);
            if ($this->Users->delete($user)) {
                $this->Flash->success(__('The user has been deleted.'));
                return $this->redirect(['action' => 'index']);
            }
        }
        
    }
}