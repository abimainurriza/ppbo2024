<?php
namespace App\Model\Pustaka;
class Author {
     public $name;
     public $description;
 
     public function __construct($name, $description) {
         $this->name = $name;
         $this->description = $description;
     }
 }