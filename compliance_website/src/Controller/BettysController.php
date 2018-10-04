<?php
namespace App\Controller;

use App\Controller\AppController;

/**
* Bettys Controller
*
*
* @method \App\Model\Entity\Betty[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
*/
class BettysController extends AppController
{
    
    /**
    * Index method
    *
    * @return \Cake\Http\Response|void
    */
    public function addArtikel()
    {
        $title = "Add Artikel";
        $this->set('title', $title);
    }
    
    public function approveM()
    {
        $title = "Approve Manager";
        $this->set('title', $title);
    }
    
    public function arsip()
    {
        $title = "Arsip";
        $this->set('title', $title);
    }
    
    public function artikel()
    {
        $title = "Artikel";
        $this->set('title', $title);
    }
    
    /**
    * View method
    *
    * @param string|null $id Betty id.
    * @return \Cake\Http\Response|void
    * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
    */
    public function view($id = null)
    {
        $betty = $this->Bettys->get($id, [
            'contain' => []
            ]);
            
            $this->set('betty', $betty);
        }
        
        /**
        * Add method
        *
        * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
        */
        public function add()
        {
            $betty = $this->Bettys->newEntity();
            if ($this->request->is('post')) {
                $betty = $this->Bettys->patchEntity($betty, $this->request->getData());
                if ($this->Bettys->save($betty)) {
                    $this->Flash->success(__('The betty has been saved.'));
                    
                    return $this->redirect(['action' => 'index']);
                }
                $this->Flash->error(__('The betty could not be saved. Please, try again.'));
            }
            $this->set(compact('betty'));
        }
        
        /**
        * Edit method
        *
        * @param string|null $id Betty id.
        * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
        * @throws \Cake\Network\Exception\NotFoundException When record not found.
        */
        public function edit($id = null)
        {
            $betty = $this->Bettys->get($id, [
                'contain' => []
                ]);
                if ($this->request->is(['patch', 'post', 'put'])) {
                    $betty = $this->Bettys->patchEntity($betty, $this->request->getData());
                    if ($this->Bettys->save($betty)) {
                        $this->Flash->success(__('The betty has been saved.'));
                        
                        return $this->redirect(['action' => 'index']);
                    }
                    $this->Flash->error(__('The betty could not be saved. Please, try again.'));
                }
                $this->set(compact('betty'));
            }
            
            /**
            * Delete method
            *
            * @param string|null $id Betty id.
            * @return \Cake\Http\Response|null Redirects to index.
            * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
            */
            public function delete($id = null)
            {
                $this->request->allowMethod(['post', 'delete']);
                $betty = $this->Bettys->get($id);
                if ($this->Bettys->delete($betty)) {
                    $this->Flash->success(__('The betty has been deleted.'));
                } else {
                    $this->Flash->error(__('The betty could not be deleted. Please, try again.'));
                }
                
                return $this->redirect(['action' => 'index']);
            }
        }
        