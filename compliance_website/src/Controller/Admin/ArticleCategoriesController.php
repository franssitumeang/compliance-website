<?php
namespace App\Controller\Admin;

use App\Controller\AppController;
use Cake\Event\Event;

class ArticleCategoriesController extends AppController
{
    public $paginate = [
        'limit' => 10,
        'order' => [
            'ArticleCategories.name_categories' => 'asc'
        ]
    ];

    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('Paginator');
        $this->loadModel('ArticleCategories');
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
                    'ArticleCategories.name_categories' => 'asc'
                ],
                'conditions' => [$attribute.' LIKE' => '%'.$searchKey.'%']
            ];
        }
        $articleCategory = $this->ArticleCategories->newEntity();
        $title = "Kategori Artikel";
        $this->set('title', $title);
        
        $articleCategories = $this->paginate('ArticleCategories');
        $paginate = $this->Paginator->getPagingParams()["ArticleCategories"];
        $this->set(compact('articleCategories', 'paginate'));
        $this->set('newArticleCategory', $articleCategory);
        //kondisi
        $this->viewBuilder()->templatePath('Admins');
        $this->render('article_category');
    }

    public function add($id = null) {
        $this->request->allowMethod(['post', 'put']);
        if(!empty($id)) {
            $articleCategory = $this->ArticleCategories->get($id);
        } else {
            $articleCategory = $this->ArticleCategories->newEntity();
        }
        $articleCategory = $this->ArticleCategories->patchEntity($articleCategory, $this->request->getData());
        if($this->ArticleCategories->save($articleCategory)) {
            $this->Flash->success(__('Tipe artikel berhasil disimpan.'));
        } else {
            $this->Flash->error(__('Kategori artikel gagal disimpan.'));
        }
        return $this->redirect(['action' => 'index']);
    }

}