<?php
namespace App\Controller\Admin;

use App\Controller\AppController;
use Cake\Event\Event;

class UserDocTypesController extends AppController
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
        $this->loadModel('UserDocTypes');
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
                    'UserDocTypes.doc_type_name' => 'asc'
                ],
                'conditions' => [$attribute.' LIKE' => '%'.$searchKey.'%']
            ];
        }
        $userDocType = $this->UserDocTypes->newEntity();
        $title = "Kategori Dokumen";
        $this->set('title', $title);
        
        $userDocTypes = $this->paginate('UserDocTypes');
        $paginate = $this->Paginator->getPagingParams()["UserDocTypes"];
        $this->set(compact('userDocTypes', 'paginate'));
        $this->set('newUserDocType', $userDocType);
        //kondisi
        $this->viewBuilder()->templatePath('Admins');
        $this->render('user_doc_type');
    }

    public function add($id = null) {
        $this->request->allowMethod(['post', 'put']);
        if(!empty($id)) {
            $userDocType = $this->UserDocTypes->get($id);
        } else {
            $userDocType = $this->UserDocTypes->newEntity();
        }
        $userDocType = $this->UserDocTypes->patchEntity($userDocType, $this->request->getData());
        if($this->UserDocTypes->save($userDocType)) {
            $this->Flash->success(__('Tipe dokumen telah disimpan.'));
        } else {
            $this->Flash->error(__('Tipe dokumen gagal disimpan.'));
        }
            return $this->redirect(['action' => 'index']);
    }

    public function delete($id) {
        if ($this->request->is('post')){
            $userDocType = $this->UserDocTypes->get($id);
            if ($this->UserDocTypes->delete($userDocType)) {
                $this->Flash->success(__('Tipe Dokumen Telah dihapus.', $userDocType->doc_type_name));       
            }
            return $this->redirect(['action' => 'index']);
        }
    }

}
