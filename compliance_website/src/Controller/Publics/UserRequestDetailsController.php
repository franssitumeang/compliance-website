<?php
namespace App\Controller\Publics;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;

class UserRequestDetailsController extends AppController
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

    public function index($id)
    {
        $title = "List Approval";
        $this->set('title', $title);

        $userRequestDetails = $this->UserRequestDetails->find('all', [
            'conditions' => ['UserRequestDetails.user_request_header_id' => $id],
            'order' => ['UserRequestDetails.created' => 'desc']
        ]);
        $userRequestHeader = $this->UserRequestDetails->UserRequestHeaders->get($id, [
            'contain' => ['Users' => 'Departments', 'UserDocTypes', 'UserRequestReasons']
        ]);
        
        $DiscussionParticipantsTable = TableRegistry::get('DiscussionParticipants');
        $discussionParticipant = $DiscussionParticipantsTable->find('all', [
            'conditions' => ['user_request_header_id' => $id],
            'contain' => ['Users']
        ]);
        $userRequestDetails = $this->paginate($userRequestDetails);
        $newUserRequestDetail = $this->UserRequestDetails->newEntity();

        $paginate = $this->Paginator->getPagingParams()["UserRequestDetails"];
        $this->set(compact('userRequestDetails', 'newUserRequestDetail', 'paginate', 'userRequestHeader', 'discussionParticipant'));
        $this->viewBuilder()->templatePath('Publics/UserRequestDetails/');
    }

    public function view($id = null)
    {
        $userRequestDetail = $this->UserRequestDetail->get($id, [
            'contain' => ['UserRequestHeaders']
        ]);

        $this->set('userRequestDetail', $userRequestDetail);
    }


    public function add($id)
    {
        $title = "Upload Revisi";
        $this->set('title', $title);
        $ure = $this->UserRequestDetails->newEntity();
        $userRequestHeader = $this->UserRequestDetails->UserRequestHeaders->get($id, [
            'contain' => ['Users' => 'Departments', 'UserDocTypes', 'UserRequestReasons']
        ]);
        if ($id == null) {
            $this->Flash->msg_error(__('Upload Revisi gagal. Belum ada dokumen yang di upload.'));
            return $this->redirect(['action' => 'index', $id]);
        }

        if ($this->request->is('post')) {
            $doc_version = ($this->UserRequestDetails->findAllByUserRequestHeaderId($id))->count();
            $ure = $this->UserRequestDetails->patchEntity($ure, $this->request->getData());

            $ure->user_request_header_id = $id;
            $ure->attachment['doc_title'] = $userRequestHeader->doc_title;
            $ure->attachment['doc_version'] = $doc_version;
            $filename = $ure->attachment['name'];
            $ure->attachment_dir = 'files/documents/UserRequestDetails/attachment/';
            $ure->attachment_type = pathinfo($filename, PATHINFO_EXTENSION);
            if ($this->UserRequestDetails->save($ure)) {
                $this->Flash->msg_success(__('Dokumen Revisi Berhasil di Upload.'));
                return $this->redirect(['action' => 'index', $id]);
            } else {
                $this->Flash->msg_error(__('Upload Revisi gagal. Periksa dokumen yang Anda Upload'));
            }
        }

        $this->set(compact('ure', 'userRequestHeader'));
        $this->viewBuilder()->templatePath('Publics/UserRequestDetails/');
    }


}
?>