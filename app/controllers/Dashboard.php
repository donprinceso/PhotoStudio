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
                'password_err' => ''
            ];
            $this->view('admin/setaccount',$data);
        }
    
        public function change()
        {
            $this->view('admin/change');
        }
        
        public function login()
        {
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
                $err = 0;
                
                $data = [
                    'email' => trim($_POST['email']),
                    'password' => trim($_POST['password']),
                    'email_err' => '',
                    'password_err' => ''
                ];
    
                //vaildating the input field
                
                if(strlen($data['password'] < 6)){
                    $err = 1;
                    $data['password_err'] = 'Password is less than six';
                }
    
                //vaildate if email exits
                if(!$this->userModel->FindUserByEmail($data['email'])){
                    $err = 1;
                    $data['email_err'] = 'Email Not Found';
                }
    
                //vaildate all 
                if($err == 0){
                    $loggin = $this->userModel->login($data);
                    $_SESSION['email'] = $data['email'];
                    Redirect::to('Dashboard/');
                    
                }else{
                    $data['password_err'] = "Incorrect Email and Password";
                    $err = 1;
                    $this->view('admin/login',$data);
                }
    
            }
            else{
    
                $data = [
                    'email' => '',
                    'password' => '',
                    'email_err' => '',
                    'password_err' => ''
                ];
                $this->view('admin/login',$data);
            }
            $this->view('admin/login',$data);
        }
    
        public function register()
        {
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
                $err = 0;
    
                $data = [
                    'name'=> trim($_POST['name']),
                    'email' => trim($_POST['email']),
                    'password' => trim($_POST['password']),
                    'name_err' => '',
                    'email_err' => '',
                    'password_err' => ''
                ];
    
                 //vaildating the input field
                if(empty($data['name'])){
                    $err = 1;
                    $data['name_err'] = 'Enter name';
                }
    
                 if(empty($data['password'])){
                    $err = 1;
                    $data['password_err'] = 'Enter Password';
                }
    
                if(strlen($data['password'] < 6)){
                    $err = 1;
                    $data['password_err'] = 'Password is less than six';
                }
    
                if(empty($data['email'])){
                    $err = 1;
                    $data['email_err'] = 'Enter Email Address';
                }
                //vaildate if email exits
                if($this->userModel->FindUserByEmail($data['email'])){
                    $err = 1;
                    $data['email_err'] = 'Email Already Exit';
                }
                if($err == 0){
                    $data['password'] = password_hash($data['password'],PASSWORD_DEFAULT);
                    $this->userModel->register($data);
                    Redirect::to('dashboard/setaccount');
                    $_SESSION['message'] = "User account register was Successfull !!!";
                    
                }else{
                    $_SESSION['message'] = "User account was not Successfull Try Again !!!";
                    $this->view('admin/setaccount',$data);
                }
    
    
            }
            else{
                $data = [
                    'name'=> '',
                    'email' => '',
                    'password' => '',
                    'name_err' => '',
                    'email_err' => '',
                    'password_err' => ''
                ];
                $this->view('admin/setaccount',$data);
            }
        }
    
        public function logout()
        {
          $loggout = $this->userModel->logout();
          if($loggout){
              Redirect::to('dashboard/login');
          }
           
        }

    }
    