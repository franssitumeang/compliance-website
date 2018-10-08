<?php
namespace App\Controller\Admin;

use App\Controller\AppController;
use Cake\Event\Event;

class UserRequestReasonsController extends AppController
{
    public $paginate = [
        'limit' => 10,
        'order' => [
            'UserDocTypes.doc_type_name' => 'asc'
        ]
    ];

    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('Paginator');
        $this->loadModel('UserRequestReasons');
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
                    'UserRequestReasons.reason_name' => 'asc'
                ],
                'conditions' => [$attribute.' LIKE' => '%'.$searchKey.'%']
            ];
        }
        $userRequestReason = $this->UserRequestReasons->newEntity();
        $title = "Alasan Pengajuan Dokumen";
        $this->set('title', $title);
        
        $userRequestReasons = $this->paginate('UserRequestReasons');
        $paginate = $this->Paginator->getPagingParams()["UserRequestReasons"];
        $this->set(compact('userRequestReasons', 'paginate'));
        $this->set('newUserRequestReason', $userRequestReason);
        //kondisi
        $this->viewBuilder()->templatePath('Admins');
        $this->render('user_request_reason');
    }

    public function add($id = null) {
        $this->request->allowMethod(['post', 'put']);
        if(!empty($id)) {
            $userRequestReason = $this->UserRequestReasons->get($id);
        } else {
            $userRequestReason = $this->UserRequestReasons->newEntity();
        }
        $userRequestReason = $this->UserRequestReasons->patchEntity($userRequestReason, $this->request->getData());
        if($this->UserRequestReasons->save($userRequestReason)) {
            $this->Flash->success(__('Alasan Pengajuan baru telah disimpan.'));
        } else {
            $this->Flash->error(__('Alasan Pengajuan baru gagal disimpan'));
        }
        
        return $this->redirect(['action' => 'index']);
    }

    public function delete($id) {
        $this->request->allowMethod(['post', 'delete']);
        $userRequestReason = $this->UserRequestReasons->get($id);
        if ($this->UserRequestReasons->delete($userRequestReason)) {
            $this->Flash->success(__('Alasan Pengajuan berhasil dihapus.'));
            return $this->redirect(['action' => 'index']);
        }
    }
}