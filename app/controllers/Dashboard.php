<?php
 //use App\Models\User;
    class Dashboard extends Controller
    {
        protected $userModel;
        
        public function __construct() {

        $this->userModel = $this->model('User');

        }
        
        public function index()
        {
            $this->view('admin/index');
        }

        public function reserv()
        {
            $this->view('admin/reservation');
        }

        public function booking()
        {
            $this->view('admin/booking');
        }

        public function process()
        {
            $this->view('admin/process');
        }

        public function request()
        {
            $this->view('admin/request');
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
        
        
    
       
    
        public function logout()
        {
          $loggout = $this->userModel->logout();
          if($loggout){
              Redirect::to('users/login');
          }
           
        }

    }
    