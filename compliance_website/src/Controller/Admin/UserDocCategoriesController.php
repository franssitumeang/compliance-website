<?php
namespace App\Controller\Admin;

use App\Controller\AppController;
use Cake\Event\Event;

class UserDocCategoriesController extends AppController
{
    public $paginate = [
        'limit' => 10,
        'order' => [
            'UserDocCategories.category_name' => 'asc'
        ]
    ];

    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('Paginator');
        $this->loadModel('UserDocCategories');
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
                    'UserDocCategories.category_name' => 'asc'
                ],
                'conditions' => [$attribute.' LIKE' => '%'.$searchKey.'%']
            ];
        }
        $userDocCategory = $this->UserDocCategories->newEntity();
        $title = "Kategori Dokumen";
        $this->set('title', $title);
        
        $userDocCategories = $this->paginate('UserDocCategories');
        $paginate = $this->Paginator->getPagingParams()["UserDocCategories"];
        $this->set(compact('userDocCategories', 'paginate'));
        $this->set('newUserDocCategory', $userDocCategory);
        //kondisi
        $this->viewBuilder()->templatePath('Admins');
        $this->render('user_doc_category');
    }

    public function add($id = null) {
        $this->request->allowMethod(['post', 'put']);
        if(!empty($id)) {
            $userDocCategory = $this->UserDocCategories->get($id);
        } else {
            $userDocCategory = $this->UserDocCategories->newEntity();
        }
        $userDocCategory = $this->UserDocCategories->patchEntity($userDocCategory, $this->request->getData());
        if($this->UserDocCategories->save($userDocCategory)) {
            $this->Flash->success(__('Tipe dokumen berhasil disimpan.'));
        } else {
            $this->Flash->error(__('Kategori dokumen gagal disimpan.'));
        }
        return $this->redirect(['action' => 'index']);
    }

    public function delete($id) {
        if ($this->request->is('post')){
            $userDocCategory = $this->UserDocCategories->get($id);
            if ($this->UserDocCategories->delete($userDocCategory)) {
                $this->Flash->success(__('Kategori Dokumen Telah dihapus.', $userDocCategory->name));       
            }
            return $this->redirect(['action' => 'index']);
        }
    }

    
    // create your authentication here
    public function isAuthorized($user) {
        return true;
    }

}