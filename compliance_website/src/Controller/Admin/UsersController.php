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
        'contain' => array('Positions','Departments'=>['Companies'],'Groups')
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
                'conditions' => [$attribute.' LIKE' => '%'.$searchKey.'%'],
                'contain' => array('Positions','Departments'=>['Companies'],'Groups')
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
            $datas = $this->request->getData();
            $user->password = "password";
            $user->is_login = 0;
            $user->name = $datas['name'];
            $user->position_id = $datas['position_id'];
            $user->phone_num = $datas['phone_num'];
            $user->email = $datas['email'];
            $user->department_id = $datas['department_id'];
            if ($this->Users->save($user, ['associated'=>['Groups']])) {
                $groups_id = explode(",", $datas['id_group']);
                $GroupsUsersTable = TableRegistry::get('GroupsUsers');
                $GroupsUsersTable->deleteAll(array('user_id' => $user->id), false);
                for($i = 0; $i < count($groups_id); ++$i) {
                    $groupsUsers = $GroupsUsersTable->newEntity();
                    $groupsUsers->user_id = $user->id;
                    $groupsUsers->group_id = $groups_id[$i];
                    $GroupsUsersTable->save($groupsUsers);
                }
                $this->Flash->success(__('The user has been saved.'));
            }else{
                $this->Flash->error(__('The user could not be saved. Please, try again.'));
            }
<<<<<<< HEAD
            return $this->redirect(['action' => 'index']);
            // debug($datas['id_group']);
=======
<<<<<<< HEAD
            // if($this->Issue->save($this->request->data)
            return $this->redirect(['action' => 'index']);
            // return debug($user);
=======
            // return $this->redirect(['action' => 'index']);
            debug($user);
>>>>>>> 1029f0ad2341acf57663a7633258dffbd1aca551
>>>>>>> 9625e1d9a9e2645782a88d68aeb71f301ff2078e
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

    public function test(){
        
        $this->request->allowMethod('ajax');
        $this->set('data', "test");
        $this->autoRender = false;
        // $this->set('_serialize',['data']);
    }
}