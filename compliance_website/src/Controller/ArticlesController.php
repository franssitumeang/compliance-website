<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Articles Controller
 *
 *
 * @method \App\Model\Entity\Article[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ArticlesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */

    public function index()
    {
        $title = "Artikel";
        
        $articles = $this->paginate($this->Articles);
        $this->set(compact('articles','title'));
        $this->viewBuilder()->templatePath('Publics/Articles');
        $this->render('index');
    }

    /**
     * View method
     *
     * @param string|null $id Article id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $article = $this->Articles->get($id, [
            'contain' => []
        ]);

        $this->set('article', $article);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $title = "Menambah Artikel";
        $article= $this->Articles->newEntity();
        if($this->request->is('post')){
            $article = $this->Articles->patchEntity($article, $this->request->getData());
            $article->user_id = "1";
            if($this->Articles->save($article)){
                $this->Flash->success('Added Success', ['key'=>'message']);
                return $this->redirect(['action'=>'index']);
            }
            $this->Flash->error(__('Unable add article'));
        }
        $this->set('post', $article);
        //$article = $this->Articles->newEntity();
        // if ($id == null) {
        //     $article = $this->Articles->newEntity();
        // }else{
        //     $article = $this->Articles->get($id);
        // }
        // if($this->request->is('post'))
        // {
        //     $article = $this->Articles->patchEntity($article, $this->request->getData());
        //     $article->user_id = "Ivan Roabalang";
        //     if($this->Articles->save($article)){
        //         $this->Flash->success(__('The Article has been saved'));
        //     }else{
        //         $this->Flash->error(__('The Article could not be saved'));
        //     }
        //     return $this->redirect(['action' => 'index']);
        // }
        $this->set(compact('article', 'title'));
        $this->viewBuilder()->templatePath('Publics/Articles');
        $this->render('add');
    }

            
        


    /**
     * Edit method
     *
     * @param string|null $id Article id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $article = $this->Articles->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $article = $this->Articles->patchEntity($article, $this->request->getData());
            if ($this->Articles->save($article)) {
                $this->Flash->success(__('The article has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The article could not be saved. Please, try again.'));
        }
        $this->set(compact('article'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Article id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $article = $this->Articles->get($id);
        if ($this->Articles->delete($article)) {
            $this->Flash->success(__('The article has been deleted.'));
        } else {
            $this->Flash->error(__('The article could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
