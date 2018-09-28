<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

class CompaniesController extends AppController{
    public function beforeFilter(Event $event){
        $this->viewBuilder()->layout('admin');
    }
    public function index()
    {
        $title = "Perusahaan";
        $this->set('title', $title);
        
        $companies = $this->Companies->find('all');
        $company = $this->Companies->newEntity();
        $this->set(compact('companies','company'));
        $this->set([
            '_serialize' => ['companies','company']
            ]);
            
            $this->viewBuilder()->templatePath('Admins');
            $this->render('company');
        }
        public function add(){
            if ($this->request->is('post')) {
                $company = $this->Companies->newEntity();
                $company = $this->Companies->patchEntity($company, $this->request->getData());
                if ($this->Companies->save($company)) {
                    $this->Flash->set(__('The company has been saved.'));
                }else{
                    // $this->Flash->set(__('The company could not be saved. Please, try again.'));
                    $this->Flash->set(__($this->Companies->validationErrors));
                }
                return $this->redirect(['action' => 'index']);
            }
            
        }
    }