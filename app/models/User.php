<?php
class User extends Database{

    public $sql;
    public $table_name = "users";

    public function FindUserByEmail($email)
    {
       $this->sql = "SELECT id FROM users WHERE email = :email ";
       $this->query($this->sql);
       $this->bind(':email', $email);
       $row = $this->Fetch();
       if($this->rowCount() > 0){
          return $row;
       }else{
          return false;
       }
    }

    /**
     * @return null $row
     */
    public function getUser()
    {

        $this->query("SELECT * FROM {$this->table_name}");
        $row = $this->FetchAll();
        if($this->rowCount() >= 0){
            $users = $row;
            http_response_code(200);
            return json_encode($users);
        }
        http_response_code(404);
        echo ('Error Found');
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

    /**
     * @param array $data
     * @return bool|false|string
     */
    public function edit(array $data)
    {
        $this->sql = "UPDATE {this->table_name} SET 
        `name`=:name,
        `email`= :email,
        `password`= :password,
         WHERE 1";
         $this->query($this->sql);
        $this->bind(":name",$data['name']);
        $this->bind(':email',$data['email']);
        $this->bind(':password',$data['password']);
        if ($this->rowCount()>0){
            $row = $this->Fetch();
            return json_encode($row);
        }
        return false;
    }

    /**
     * @param $email
     * @return bool
     */
    public function destroy($email)
    {
        $this->sql = 'DELETE FROM {this->table_name } WHERE email = :email ';
        $this->query($this->sql);
        $this->bind(':email', $email);
        if($this->execute()){
           return true;
        }else{
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