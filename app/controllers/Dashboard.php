<?php
 //use App\Models\User;
    class Dashboard extends Controller
    {
        protected $userModel;
        protected $BookModel;
        
        public function __construct() {

        $this->userModel = $this->model('User');
        $this->BookModel = $this->model('Booking');

        }

        /**
         *
         */
        public function getType($type){
            if($type == APPROVED){
                return APPROVED;
            }elseif ($type == NotAPPOVERD){
                return NotAPPOVERD;
            }
        }

        /**
         *
         */
        public function index()
        {
            //$data = $this->BookModel->List();
           // if($this->getType(NotAPPOVERD)){
                $data = $this->BookModel->notApproved(NotAPPOVERD);
           // }
            $this->view('admin/index',$data);
        }

        public function Find($id)
        {
            $data = $this->BookModel->FindById($id);
            echo $data;
        }

        public function reserv()
        {
            $data = $this->BookModel->List();
            $this->view('admin/reservation',$data);
        }

        public function booking()
        {
            $this->view('admin/booking');
        }

        public function process()
        {
            $data = $this->BookModel->approved(APPROVED);
            $this->view('admin/process',$data);
        }

        public function request()
        {
            $data = $this->BookModel->notApproved(NotAPPOVERD);
            $this->view('admin/request',$data);
        }

        public function setaccount()
        {
            $data = [
                'email' => '',
                'password' => '',
                'name_err' => '',
                'email_err' => '',
                'password_err' => '',
                'err_message' => '',
                'message' => ''
            ];
            $this->view('admin/setaccount',$data);
        }
    
        public function change()
        {
            $this->view('admin/change');
        }

        public function processById($id)
        {
            if(getType(APPROVED)){
                $this->BookModel->process($id);
                $this->request();
            }
            
        }
    
        public function logout()
        {
          $loggout = $this->userModel->logout();
          if($loggout){
              Redirect::to('users/login');
          }
           
        }

    }
    