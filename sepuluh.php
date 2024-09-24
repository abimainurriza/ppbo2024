<?php


// require_once 'App/Admin/HomePage.php';
// require_once 'App/Admin/ManajemenArtikel.php';


// use App\Admin\HomePage;
// use App\Admin\ManajemenArtikel;


// $hp = new HomePage();
// $hp->tampil();

// echo "\n";

// $ma = new ManajemenArtikel();
// $ma->tambah();

require_once 'vendor/autoload.php';


use App\Admin\HomePage;
use App\Admin\ManajemenArtikel;


$hp = new HomePage();
$hp->tampil();

echo "\n";
$ma = new ManajemenArtikel();
$ma->tambah();
