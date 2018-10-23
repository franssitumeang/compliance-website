<?php
namespace App\Controller\Publics;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;

class ArticlesController extends AppController
{

    public $paginate = [
        'limit' => 10,

    ];

    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('Paginator');
        $this->loadComponent('RequestHandler');
    }

    public function view($id = null)
    {
        $articleTable = TableRegistry::get('Articles');
        $article = $articleTable->get($id);
        $articleCommentsTable = TableRegistry::get('ArticleComments');
        $comments = $articleCommentsTable->find('all')->where(['article_id' => $article->id])
            ->contain(['Users', 'Articles']);
        $title = "View - " .$article->title;
        $this->set(compact('title', 'article', 'comments'));
        $this->viewBuilder()->templatePath('Publics');
        $this->render('view');
    }

     // create your authentication here
     public function isAuthorized($user) {
        return true;
    }
}
?>