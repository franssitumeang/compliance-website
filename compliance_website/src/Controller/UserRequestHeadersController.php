<?php
namespace App\Controller;

use App\Controller\AppController;

class UserRequestHeadersController extends AppController
{

    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('Paginator');
    }

    public function index()
    {
        $title = "List Approval";
        $this->set('title', $title);
        $this->paginate = [
            'contain' => ['Users','Reasons']

        ];
        $userRequestHeaders = $this->paginate($this->UserRequestHeaders);
        $userRequestHeader = $this->UserRequestHeaders->newEntity();
        $paginate = $this->Paginator->getPagingParams()["UserRequestHeaders"];
        $this->set(compact('UserRequestHeaders', 'UserRequestHeader', 'paginate'));

        $this->viewBuilder()->templatePath('Publics');
        $this->render('user_request_headers_list');
    }

    public function view($id = null)
    {
        $userRequestHeader = $this->UserRequestHeaders->get($id, [
            'contain' => ['Users', 'Reasons']
        ]);

        $this->set('userRequestHeader', $userRequestHeader);
    }

    public function add()
    {
        $userRequestHeader = $this->UserRequestHeaders->newEntity();
        if ($this->request->is('post')) {
            $userRequestHeader = $this->UserRequestHeaders->patchEntity($userRequestHeader, $this->request->getData());
            if ($this->UserRequestHeaders->save($userRequestHeader)) {
                $this->Flash->success(__('The user request header has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user request header could not be saved. Please, try again.'));
        }
        $users = $this->UserRequestHeaders->Users->find('list', ['limit' => 200]);
        $reasons = $this->UserRequestHeaders->Reasons->find('list', ['limit' => 200]);
        $this->set(compact('userRequestHeader', 'users', 'reasons'));
    }

    public function edit($id = null)
    {
        $userRequestHeader = $this->UserRequestHeaders->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $userRequestHeader = $this->UserRequestHeaders->patchEntity($userRequestHeader, $this->request->getData());
            if ($this->UserRequestHeaders->save($userRequestHeader)) {
                $this->Flash->success(__('The user request header has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user request header could not be saved. Please, try again.'));
        }
        $users = $this->UserRequestHeaders->Users->find('list', ['limit' => 200]);
        $reasons = $this->UserRequestHeaders->Reasons->find('list', ['limit' => 200]);
        $this->set(compact('userRequestHeader', 'users', 'reasons'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $userRequestHeader = $this->UserRequestHeaders->get($id);
        if ($this->UserRequestHeaders->delete($userRequestHeader)) {
            $this->Flash->success(__('The user request header has been deleted.'));
        } else {
            $this->Flash->error(__('The user request header could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
        