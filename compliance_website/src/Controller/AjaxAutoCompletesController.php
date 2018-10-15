<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

use Cake\ORM\TableRegistry;

class AjaxAutoCompletesController extends AppController
{
    public function initialize()
    {
        $this->loadComponent('RequestHandler');
    }

    public function search()
    {
        $title = "contoh";
        $this->set(compact('title'));

    }

    function searchName()
    {
        if ($this->request->is('ajax')) {
            $this->autoRender = false;
            $query = $this->request->query('name');
            $usersTable = TableRegistry::get('Users');
            $result = $usersTable->find('list', [
                'keyField' => 'id',
                'valueField' => 'name',
                'conditions' => [
                    'name LIKE' => '%' . $query . '%']
            ]);

            $resultJ = json_encode(['result' => $result->toArray()]);
            $this->response->type('json');
            $this->response->body($resultJ);
            return $this->response;
        }
    }

}