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
                    'name LIKE' => '%' . $query . '%'
                ]
            ]);

            $resultJ = json_encode($result->toArray());
            $this->response->type('json');
            $this->response->body($resultJ);
            return $this->response;
        }
    }

    function addparticipant()
    {
        if ($this->request->is('ajax')) {
            $this->autoRender = false;
            $userId = $this->request->query('userId');
            $userRequestHeaderId = $this->request->query('userRequestHeaderId');
            $result = [
                "isSuccess" => false,
                "message" => null,
            ];

            $DiscussionParticipantTable = TableRegistry::get('DiscussionParticipants');

            if (! $DiscussionParticipantTable->exists(['user_id' => $userId, 'user_request_header_id' => $userRequestHeaderId])) {
                
                $UserTable = TableRegistry::get('Users');
                $UserRequestHeaderTable = TableRegistry::get('UserRequestHeaders');
                
                $user = $UserTable->get($userId);
                $request = $UserRequestHeaderTable->get($userRequestHeaderId);
                
                $result = [
                    "isSuccess" => false,
                    "message" => null,
                    "User" => $user,
                    "UserRequest" => $request
                ];
                $discussionParticipant = $DiscussionParticipantTable->newEntity();
                $discussionParticipant->user_id = $userId;
                $discussionParticipant->user_request_header_id = $userRequestHeaderId;

                if ($DiscussionParticipantTable->save($discussionParticipant)) {
                    $result['isSuccess'] = true;
                    $result['message'] = "Participant berhasil ditambahkan";
                } else {
                    $result['message'] = "Participant tidak berhasil ditambahkan";
                }
            } else {
                $result['message'] = "Participant telah terdaftar";
            }
            $resultJ = json_encode($result);
            $this->response->type('json');
            $this->response->body($resultJ);
            return $this->response;
        }
    }



    function deleteparticipant()
    {
        if ($this->request->is('ajax')) {
            $this->autoRender = false;
            $userId = $this->request->query('userId');
            $userRequestHeaderId = $this->request->query('userRequestHeaderId');
            
            $result = [
                "isSuccess" => false,
                "message" => null,
            ];

            $DiscussionParticipantTable = TableRegistry::get('DiscussionParticipants');

            $tmp = $DiscussionParticipantTable->find('all', [
                'conditions' => [['user_request_header_id' => $userRequestHeaderId], ['user_id' => $userId]]
            ]);

            if ($DiscussionParticipantTable->delete($tmp->first())) {
                $result = [
                    "isSuccess" => true,
                    "message" => "Berhasil menghapus participant"
                ];
            } else {
                $result["message"] = "Gagal menghapus participant";
            }


            $resultJ = json_encode($result);
            $this->response->type('json');
            $this->response->body($resultJ);
            return $this->response;
        }
    }

}