<?php
namespace App\Controller;
use Cake\ORM\TableRegistry;
use App\Controller\AppController;

class UserRequestHeadersController extends AppController
{

    public $paginate = [
        'limit' => 10,
        'contain' => ['Users','UserRequestReasons']
        
    ];

    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('Paginator');
    }

    public function index()
    {
        $searchKey = $this->request->query('search_key');
        $attribute = $this->request->query('attribute');
        if($searchKey){
            $this->paginate = [
                'limit' => 10,
                'order' => [
                    'UserRequestHeaders.request_dates' => 'asc'
                ],
                'contain' => ['Users','UserRequestReasons'],
                'conditions' => [$attribute.' LIKE' => '%'.$searchKey.'%']
                
            ];
        } 
        $title = "Daftar Dokumen";
        $this->set('title', $title);          
        $userRequestHeaders = $this->paginate('UserRequestHeaders');
        $paginate = $this->Paginator->getPagingParams()["UserRequestHeaders"];
        $usersTable = TableRegistry::get('Users');
        $users = $usersTable->find('all');
        $allUserRequestHeader = $this->UserRequestHeaders->find('all');

        $this->set(compact('userRequestHeaders', 'paginate', 'users', 'allUserRequestHeaders'));
       
        $this->viewBuilder()->templatePath('Publics');
        $this->render('user_request_headers_list');
    }

    public function view($id = null)
    {
        $userRequestHeader = $this->UserRequestHeaders->get($id, [
            'contain' => ['Users', 'UserRequestReasons']
        ]);

        $this->set('userRequestHeader', $userRequestHeader);
    }

    public function add()
    {
        $title = "Add User Request";


        $userRequestHeader = $this->UserRequestHeaders->newEntity();
        $UserRequestDetail = TableRegistry::get('UserRequestDetails');

        
        $userRequestDetail = $UserRequestDetail->newEntity();

        
        if ($this->request->is('post')) {
            $datas = $this->request->getData();
            $userRequestHeader->user_doc_category_id = $datas['user_doc_category_id'];
            $userRequestHeader->user_doc_type_id = $datas['user_doc_type_id'];
            $userRequestHeader->user_id = $datas['user_id'];
            $userRequestHeader->user_request_reason_id = $datas['user_request_reason_id'];
            $userRequestHeader->doc_title = $datas['doc_title'];
            $userRequestHeader->doc_no = $datas['doc_no'];
            
            if($this->UserRequestHeaders->save($userRequestHeader)) {
                $attachment = $datas['file_attachment'];
                $attachment['doc_title'] = $datas['doc_title'];
                $filename = $this->request->data['file_attachment']['name'];
                $extension = pathinfo($filename, PATHINFO_EXTENSION);
                
                $userRequestDetail->user_request_header_id = $userRequestHeader->id;
                $userRequestDetail->descriptions = $datas['descriptions'];
                $userRequestDetail->attachment_dir = 'files/documents/UserRequestDetails/attachment/';
                $userRequestDetail->attachment_type = $extension;

                $userRequestDetail->attachment = $attachment;

                if($UserRequestDetail->save($userRequestDetail)) {
                    $this->Flash->msg_success(__('Pengajuan Dokumen berhasil dibuat.'));
                }else {
                    $this->Flash->msg_success(__('Pengajuan Dokumen gagal dibuat.'));
                }
            }

            // return $this->redirect(['action' => 'index']);
            // }
            // $this->Flash->error(__('The user request header could not be saved. Please, try again.'));
        }

        $users = $this->UserRequestHeaders->Users->find('all', array(
            'fields' => array('Users.id', 'Users.name')
        ));
        $UserDocCategories = $this->UserRequestHeaders->UserDocCategories->find('all', array(
            'fields' => array('UserDocCategories.id', 'UserDocCategories.category_name')
        ));

        
        $UserRequestReasons = $this->UserRequestHeaders->UserRequestReasons->find('all', array(
            'fields' => array('UserRequestReasons.id', 'UserRequestReasons.reason_name')
        ));

        $UserDocTypes = $this->UserRequestHeaders->UserDocTypes->find('all', array(
            'fields' => array('UserDocTypes.id', 'UserDocTypes.doc_type_name')
        ));
        
        
        $this->set(compact('userRequestHeader','UserDocCategories', 'users', 'UserRequestReasons', 'title', 'UserDocTypes'));
        
        $this->viewBuilder()->templatePath('Publics/UserRequestHeaders');
        $this->render('add');
    }

    public function download($id=null) { 
        $filePath = WWW_ROOT .'files'. DS . $id;
        $this->response->file($filePath ,
            array('download'=> true, 'name'=> 'file name'));
    }

   
}
        