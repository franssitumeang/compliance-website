<?php
namespace App\Controller\Admin;

use App\Controller\AppController;
use Cake\Event\Event;

class ArchivesController extends AppController{

    public $paginate = [
        'limit' => 10,
        'order' => [
            'Archives.doc_name' => 'asc'
        ],
        //'contain' => ['ArchiveCategories']
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
                    'Archives.title' => 'asc'
                ],
                'conditions' => [$attribute.' LIKE' => '%'.$searchKey.'%'],
                'contain' => ['ArchiveCategories']
            ];
        }       
        $title = "Arsip";
        $this->set('title', $title);
        $archives = $this->paginate('Archives');
        $newArchive = $this->Archives->newEntity();
        $paginate = $this->Paginator->getPagingParams()["Archives"];
        $this->set(compact('archives','newArchive','paginate'));
        
        $this->viewBuilder()->templatePath('Admins');
        $this->render('archive');
    }
    
    //Add Method
    
    public function add($id = null){
        if($id == null){
            $archive = $this->Archives->newEntity();
        }else{
            $archive = $this->Archives->get($id);
        }
        if ($this->request->is('post')) {
            $article = $this->Archives->patchEntity($archive, $this->request->getData());
            if ($this->Archives->save($article)) {
                $this->Flash->success(__('The archive has been saved.'));
            }else{
                $this->Flash->error(__('The archive could not be saved. Please, try again.'));
            }
            
        }
        return $this->redirect(['action' => 'index']);
    }

    // Delete Method
    public function delete($id = null)
    {
        if ($this->request->is('post')) {
            $archive = $this->Archives->get($id);
            if ($this->Archives->delete($archive)) {
                $this->Flash->success(__('The archive has been deleted.'));
                return $this->redirect(['action' => 'index']);
            }
        }
        
    }
}