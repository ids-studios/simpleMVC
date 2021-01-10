<?php

/*
Pages extends the Controller so we can use setView and setModel methods. setView takes 2 parameters, name of the file in views and data array.

*/
class Pages extends Controller {

 public function default(){
    $data = [
      'test' => 'test information passed via data array'
    ];
    $this->setView('pages/default',$data);

   }

   public function example(){
     $this->setView('pages/example');
   }

}

 ?>
