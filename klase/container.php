<?php

class Container{
    public $korisnici;
    public $vijesti;
    public $emailovi;
    
    function __construct(){
        $this->korisnici = array();
        $this->vijesti = array();
        $this->emailovi = array();
    }
    
    
    public function dodajKorisnika($korisnik){
       array_push($this->korisnici, $korisnik); 
    }
    
    public function dodajVijest($vijest){
       array_push($this->vijesti, $vijest); 
    }

    public function dodajEmail($email){
       array_push($this->emailovi, $email); 
    }

    public function vratiKorisnika($id){
       foreach($this->korisnici as $korisnik){
           if($korisnik->id === $id){
               echo "Nadjen";
           }
           else echo "Nije nadjen";
       } 
    }
    
    public function vratiSveKorisnike(){
        return $this->korisnici;
    }
    public function brisiKorisnika($korisnik){
       foreach($this->korisnici as $korisnik){
          if($korisnici->korisnik === $korisnik){
              echo "Izbrisan";
          } 
        else echo "Ne postoji";   
      } 
   }
    
    public function brisiVijest($vijest){
       foreach($this->vijesti as $vijest){
          if($vijesti->vijest === $vijest){
              echo "Vijest izbrisana";
          } 
        else echo "Vijest ne postoji";   
      } 
   }

    public function brisiEmail($email){
       foreach($this->emailovi as $email){
          if($emailovi->email === $email){
              echo "Email izbrisan";
          } 
        else echo "Email Ne postoji";   
      } 
   }



     public function promijeniPassword($korisnik){
       foreach($this->korisnici as $password){
           if($korisnici->password === $password){
               echo "Promijenjen";
           }
           else echo "Nije uredu";
  }
}

      
}

