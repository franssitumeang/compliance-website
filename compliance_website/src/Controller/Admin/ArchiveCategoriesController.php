<?php
namespace App\Controller\Admin;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * ArchiveCategories Controller
 *
 * @property \App\Model\Table\ArchiveCategoriesTable $ArchiveCategories
 *
 * @method \App\Model\Entity\ArchiveCategory[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ArchiveCategoriesController extends AppController
{

    public $paginate = [
        'limit' => 10,
        'order' => [
            'ArchiveCategories.name_categories' => 'asc'
        ]
        
    ];

    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('Paginator');
        $this->loadModel('ArchiveCategories');
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
                'limit' => '10',
                'order' => [
                    'ArchiveCategories.name_categories' => 'asc'
                ],
                'conditions' => [$attribute. 'LIKE' => '%'.$searchKey.'%']
            ];
        }
        $archiveCategory = $this->ArchiveCategories->newEntity();
        $title = "Kategori Arsip";
        $this->set('title', $title);

        $archiveCategories = $this->paginate('ArchiveCategories');
        $paginate = $this->Paginator->getPagingParams()["ArchiveCategories"];
        $this->set(compact('archiveCategories', 'paginate'));
        $this->set('newArchiveCategory', $archiveCategory);
        $this->viewBuilder()->templatePath('Admins');
        $this->render('archive_category');
    }

    public function add($id = null)
    {
        $this->request->allowMethod(['post', 'put']);
        if(!empty($id)) {
            $archiveCategory = $this->ArchiveCategories->get($id);
        } else {
            $archiveCategory = $this->ArchiveCategories->newEntity();
        }
        $archiveCategory = $this->ArchiveCategories->patchEntity($archiveCategory, $this->request->getData());
        if($this->ArchiveCategories->save($archiveCategory)) {
            $this->Flash->success(__('Kategori arsip berhasil disimpan.'));
        } else {
            $this->Flash->error(__('Kategori arsip gagal disimpan.'));
        }
        return $this->redirect(['action' => 'index']);
    }

    public function delete($id)
    {
        if ($this->request->is('post')){
            $archiveCategory = $this->ArchiveCategories->get($id);
            if ($this->ArchiveCategories->delete($archiveCategory)) {
                $this->Flash->success(__('Kategori Dokumen Telah dihapus.'));       
            }
            return $this->redirect(['action' => 'index']);
        }
    }


    // create your authentication here
    public function isAuthorized($user) {
        return true;
    }
}
