<?php
namespace App\Controller\Admin;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;

class DepartmentsController extends AppController{

    public $paginate = [
        'limit' => 10,
        'order' => [
            'Departments.dept_name' => 'asc'
        ],
        'contain' => array('Companies','ParentDepartments')
        
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
                    'Departments.dept_name' => 'asc'
                ],
                'contain' => array('Companies','ParentDepartments'),
                'conditions' => [$attribute.' LIKE' => '%'.$searchKey.'%']
            ];
        }       
        $title = "Departemen";
        $this->set('title', $title);
        $departments = $this->paginate('Departments');
        $department = $this->Departments->newEntity();
        $paginate = $this->Paginator->getPagingParams()["Departments"];
        $companiesTable = TableRegistry::get('Companies');
        $companies = $companiesTable->find('all');
        $allDepartment = $this->Departments->find('all');

        $this->set(compact('departments','department','paginate','companies','allDepartment'));
        
        $this->viewBuilder()->templatePath('Admins');
        $this->render('department');
    }
    
    public function add($id = null){
        if($id == null){
            $department = $this->Departments->newEntity();
        }else{
            $department = $this->Departments->get($id);
        }
        if ($this->request->is('post')) {
            $department = $this->Departments->patchEntity($department, $this->request->getData());
            if($department->parent_id == ""){
                $department->parent_id = null;
            }
            if ($this->Departments->save($department)) {
                $this->Flash->success(__('The department has been saved.'));
            }else{
                $this->Flash->error(__('The department could not be saved. Please, try again.'));
            }
            return $this->redirect(['action' => 'index']);
        }
    }

    public function delete($id = null)
    {
        if ($this->request->is('post')) {
            $department = $this->Departments->get($id);
            if ($this->Departments->delete($department)) {
                $this->Flash->success(__('The department has been deleted.'));
                return $this->redirect(['action' => 'index']);
            }
        }
        
    }

    
    // create your authentication here
    public function isAuthorized($user) {
        return true;
    }
}