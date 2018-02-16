<?php 

class Email{


  public $id;
    public $ime;
    public $email;
    public $sadrzaj;

  public function __constructor($ime, $email, $sadrzaj) {
        $this->ime = $ime;
      $this->email = $email;
      $this->sadrzaj = $sadrzaj;
      $this->id = rand(0, 999);
    }

   public function dodajEmail($ime, $email, $sadrzaj){     $this->ime = $ime;
   $this->id = rand(0, 999);
   $this->sadrzaj = $sadrzaj;
   $this->email = $email; 
 }
    
}



?>