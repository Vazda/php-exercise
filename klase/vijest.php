<?php 

class Vijest{
    public $id;
    public $user_id;
    public $naziv;
    public $sadrzaj;

  public function __constructor($naziv, $sadrzaj) {
    $this->id = rand(0, 999);
        $this->user_id = rand(0, 999);
        $this->naziv = $naziv;
        $this->sadrzaj = $sadrzaj;
}
    public function dodajVijest($naziv, $sadrzaj){
        $this->user_id = rand(0, 999);
        $this->naziv = $naziv;
        $this->id = rand(0,999);
        $this->sadrzaj = $sadrzaj; 
    }
    
}



?>