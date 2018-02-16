<?php
require('container.php');
require('korisnik.php');
require('email.php');
require('vijest.php');


$c = new Container();


$k = new Korisnik();
$k->napraviKorisnika('Ferrari', 'Italy');

$c->dodajKorisnika($k);

$x = new Korisnik();
$x->napraviKorisnika('Mercedes', 'Germany');

$c->dodajKorisnika($x);

$r = new Korisnik();
$r->napraviKorisnika('Volvo', 'Sweden');

$c->dodajKorisnika($r);

$l = new Vijest();
$l->dodajVijest('Tesla', 'Tesla otkupljuje Volvo');

$c->dodajVijest($l);

$o = new Vijest();
$o->dodajVijest('Mercedes', 'Sampion 2017 godine u Formuli 1');
$c->dodajVijest($o);

$a = new Vijest();
$a->dodajVijest('Ferrari', 'Novi bolid spreman ima potencijala u borbi za naslov u 2018 godini');

$c->dodajVijest($a);

$g = new Email();
$g->dodajEmail('Hamilton', 'mercedes@gmail.com', 'Sampion u 2017 godini');

$c->dodajEmail($g);

$h = new Email();
$h->dodajEmail('Kimi', 'ferrari@gmail.com', 'Novi ugovor do 2019 godine');

$c->dodajEmail($h);

$y = new Email();
$y->dodajEmail('Volvo', 'volvo@gmail.com', 'Elektricni auto');

$c->dodajEmail($y);


echo "<pre>";

var_dump($c);

//unset($c[$x]);
