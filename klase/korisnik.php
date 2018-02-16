<?php 

class Korisnik{
    public $id;
    public $username;
    public $password;
    
    
    public function napraviKorisnika($username, $password){
       $this->username = $username;
        $this->password = $password;
        $this->id = rand(0,10); 
    }
    
    
}



?>