<?php
class User extends Database{

    public $sql;

    public function FindUserByEmail($email)
    {
       $this->sql = "SELECT id FROM users WHERE email = :email ";
       $this->query($this->sql);
       $this->bind(':email', $email);
       $row = $this->Fetch();
       if($this->rowCount() > 0){
          return true;
       }else{
          return false;
       }
    }

    public function register(array $data):bool 
    {
        $this->sql = "INSERT INTO `users`( `name`, `email`, `password`, `token`) VALUES (:name,:email,:password,:token)";
        $this->query($this->sql);
        $this->bind(':name',$data['name']);
        $this->bind(':email',$data['email']);
        $this->bind(':password',$data['password']);
        $this->bind(':token',generate_token());
        if ($this->execute())
        {
         return true;
        }
        return false;
    }

    public function login(array $data)
    {
        $this->sql = 'SELECT * FROM `users` WHERE email = :email AND password=:password';
        $this->query($this->sql);
        $this->bind(':email',$data['email']);
        $this->bind(':password',$data['password']);
        if($this->rowCount() > 0){
            $row = $this->Fetch();
            $hash = $row['password'];
            if(password_verify($data['password'],$hash)){
                return true;
            }
                return false;
        }
        
    }

    public function logout()
    {
        if(session_unset()){
            return true;
        }
        return false;
    }

    
}