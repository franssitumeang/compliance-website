<?php
namespace App\Controller\Admin;

use App\Controller\AppController;
use Cake\Event\Event;

class ArticlesController extends AppController{

    public $paginate = [
        'limit' => 10,
        'order' => [
            'Articles.title' => 'asc'
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

    public function index()
    {
        $searchKey = $this->request->query('search_key');
        $attribute = $this->request->query('attribute');
        if($searchKey){
            $this->paginate = [
                'limit' => 10,
                'order' => [
                    'Articles.title' => 'asc'
                ],
                'conditions' => [$attribute.' LIKE' => '%'.$searchKey.'%']
            ];
        }       
        $title = "Artikel";
        $this->set('title', $title);
        $articles = $this->paginate('Articles');
        $article = $this->Articles->newEntity();
        $paginate = $this->Paginator->getPagingParams()["Articles"];
        $this->set(compact('articles','article','paginate'));
        
        $this->viewBuilder()->templatePath('Admins');
        $this->render('article');
    }
    
    
    public function add($id = null){
        if($id == null){
            $article = $this->Articles->newEntity();
        }else{
            $article = $this->Articles->get($id);
        }
        if ($this->request->is('post')) {
            $article = $this->Articles->patchEntity($article, $this->request->getData());
            if ($this->Articles->save($article)) {
                $this->Flash->success(__('The article has been saved.'));
            }else{
                $this->Flash->error(__('The article could not be saved. Please, try again.'));
            }
            return $this->redirect(['action' => 'index']);
        }
    }
    public function delete($id = null)
    {
        if ($this->request->is('post')) {
            $article = $this->Articles->get($id);
            if ($this->Articles->delete($article)) {
                $this->Flash->success(__('The article has been deleted.'));
                return $this->redirect(['action' => 'index']);
            }
        }
        
    }
}