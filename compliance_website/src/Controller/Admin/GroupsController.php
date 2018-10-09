<?php
namespace App\Controller\Admin;

use App\Controller\AppController;
use Cake\Event\Event;

class GroupsController extends AppController
{
    public $paginate = [
        'limit' => 10,
        'order' => [
            'Groups.title' => 'asc'
        ]
    ];

    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('Paginator');
    }
    public function beforeFilter(Event $event){
        $this->viewBuilder()->layout('admin');
    }
    public function index() {
        $searchKey = $this->request->query('search_key');
        $attribute = $this->request->query('attribute');
        if($searchKey) {
            $this->paginate = [
                'limit' => '10',
                'order' => [
                    'Groups.title' => 'asc'
                ],
                'conditions' => [$attribute.' LIKE' => '%'.$searchKey.'%']
            ];
        }
        $group = $this->Groups->newEntity();
        $title = "Groups";
        $this->set('title', $title);
        
        $groups = $this->paginate('Groups');
        $paginate = $this->Paginator->getPagingParams()["Groups"];
        $this->set(compact('groups', 'paginate'));
        $this->set('newGroup', $group);
        //kondisi
        $this->viewBuilder()->templatePath('Admins');
        $this->render('group');
    }

    public function add($id = null) {
        $this->request->allowMethod(['post', 'put']);
        if(!empty($id)) {
            $group = $this->Groups->get($id);
        } else {
            $group = $this->Groups->newEntity();
        }
        $group = $this->Groups->patchEntity($group, $this->request->getData());
        if($this->Groups->save($group)) {
            $this->Flash->success(__('The Group has been saved.'));
        } else {
            $this->Flash->error(__('The Group could not be saved. Please, try again.'));
        }
        
        return $this->redirect(['action' => 'index']);
    }

    public function delete($id) {
        $this->request->allowMethod(['post', 'delete']);
        $group = $this->Groups->get($id);
        if ($this->Groups->delete($group)) {
            $this->Flash->success(__('The group has been deleted.'));
            return $this->redirect(['action' => 'index']);
        }
    }
}