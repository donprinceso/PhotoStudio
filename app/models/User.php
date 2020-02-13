<?php
class User extends Database{

    public $sql;

    public function FindUserByEmail($email)
    {
       $this->sql = "SELECT id FROM users WHERE email = :email ";
       $this->query($this->sql);
       $this->bind(':email', $email);
       if($this->rowCount() > 0){
          $row = $this->Fetch();
          return true;
       }else{
          return false;
       }
    }

    public function register(array $data) :bool 
    {
        $sql = "Insert Into users (name,email,password,token) Values (:name,:email:password,:token)";
        $this->query($sql);
        $this->bind(':name',$data['name']);
        $this->bind(':email',$data['email']);
        $this->bind(':password',$data['password']);
        $this->bind(':token',getTokel());
        if ($this->execute())
        {
         return true;
        }
        return false;
    }

    public function login(array $data):bool
    {
        $sql = "select * from users where email= :email LIMIT=1";
        $this->query($sql);
        $this->bind();
        $this->bind();
        $row = $this->Fetch();
        if($this->rowCount() > 0){
            $hash = $row['password'];
            if(password_verify($data['password'],$hash)){
                return $row;
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