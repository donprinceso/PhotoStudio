<?php

 class Booking extends DataBase{

    public $sql;
    public $table = "books";

     /**
      * @param array $data
      * @return bool|false|string
      */
     public function insert(array $data)
    {
        $this->sql = "INSERT INTO {$this->table}
         (`user_name`, `user_email`, `user_phone`, `user_loation`, `event_select`, `date_select`, `services`)
          VALUES
           (`:user_name`, `:user_email`, `:user_phone`, `:user_loation`, `:event_select`, `:date_select`, `:services`)";
        $this->query($this->sql);
        $this->bind(':user_name',$data['name']);
        $this->bind(':user_email',$data['email']);
        $this->bind(':user_phone',$data['phone']);
        $this->bind(':user_location',$data['location']);
        $this->bind(':event_select',$data['event']);
        $this->bind(':date_select',$data['date']);
        $this->bind(':service',$data['service']);
        if ($this->execute()) {
            return json_encode(true);
        }
        return false;
    }

     /**
      * @param $id
      * @return bool|false|string
      */
     public function  FindById($id){

        $this->sql = "SELECT * FROM {$this->table} WHERE id = :id" ;
        $this->query($this->sql);
        $this->bind(':id',$id);
        $data = $this->Fetch();
        if($this->rowCount() >= 1){
            return json_encode($data);
        }
        return FALSE;
    }

     /**
      * @param string $phone
      * @return bool|false|string
      */
     public function book_name(string $phone){
        $this->sql = "SELECT * FROM {$this->table} WHERE user_phone = :phone";
        $this->query($this->sql);
        $this->bind(':phone',$phone);
        if($this->rowCount()>= 1){
            $rowdata = $this->Fetch();
            return $rowdata;
        }
        return FALSE;
     }

     /**
      *setting if the Reservation is APPROVED or NOT
      * @param int $approved
      * @return
      */
     public function notApproved($approved = 0){
        $this->sql = "SELECT * FROM {$this->table} WHERE appoverd = :approved";
        $this->query($this->sql);
        $this->bind(':approved',$approved);
        if ($this->rowCount() >= 0){
            $row = $this->FetchAll();
            return $row;
        }
    }

     /**
      *
      */
     public function approved($approved = 1){
         $this->sql = "SELECT * FROM {$this->table} WHERE appoverd = :approved";
         $this->query($this->sql);
         $this->bind(':approved',$approved);
         if($this->rowCount()>= 0){
            $row = $this->FetchAll();
            return $row;
         }
    }
    /**
     * getting the List of all the Reservation that is be made
     */
     public function list(){
        $this->sql = "SELECT * FROM {$this->table} ORDER BY ID DESC " ;
        $this->query($this->sql);
        if($this->rowCount() >= 0){
            $data = $this->FetchAll();
            return $data;
        }
        
    }

    /**
     * Removing the order made
     */
     public function remove_book(){

    }

    public function process($id){

        $this->sql = "UPDATE {$this->table} SET appoverd = :approved WHERE id = :id";
        $this->query($this->sql);
        $this->bind(':id',$id);
        $this->bind(':approved',APPROVED);
        if($this->execute()){
            return true;
        }

    }

 }