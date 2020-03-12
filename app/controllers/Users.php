<?php 

 class Users extends Controller
 {
     public $userModel;
     // setting the user model to the controller 
    public function __construct() {
        $this->userModel = $this->model('User');
    }
    
    // user login board 
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
    
                //validate if email exits
                if(!$this->userModel->FindUserByEmail($data['email'])){
                    $err = 1;
                    $data['email_err'] = 'Email Not Found';
                }
    
                //validate all
                if($err == 0){
                    $logging = $this->userModel->login($data);
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

    // registing the user admin to the system
    public function register()
    {
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
            $err = 0;
            // $data as the array that content the user input from the view
            $data = [
                'name'=> trim($_POST['name']),
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
                'name_err' => '',
                'email_err' => '',
                'password_err' => '',
                'err_message' => '',
                'message' => ''
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
            // vaildting the input password if it is less than six
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
                echo ("User account register was Successfull !!!");
                
            }else{
                echo("User account was not Successfull Try Again !!!");
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
                'password_err' => '',
                'message' => ''
            ];
            $this->view('admin/setaccount',$data);
        }
    }

    // Removeing the user from the database 
    public function remove()
    {
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
            $error = 0;
            $data = [
                'name'=>trim($_POST['name']),
                'email'=>trim($_POST['email']),
                'err_message' => ''
            ];
            if(empty($data['name'])){
                $error = 1;
                $data['err_message'] = "enter Name";
            }
            if($this->userModel->FindUserByEmail($data['email'])){
                $this->userModel->destory($data['email']);
                $data['err_message'] = "Account Successful Remove From Database";
                Redirect::to('dashboard/setaccount');
            }
            else{
                $error = 1;
                $data['err_message'] = "Email dont exit Try Again";
                Redirect::to('dashboard/setaccount');
            }
        }
        else{
            Redirect::to('dashboard/setaccount');
        }
    }

     /**
      *
      */
     public function userList()
     {
         $users = $this->userModel->getUser();
         echo($users);
     }
 }