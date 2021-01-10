<?php
/*
Base controller - responsible for loading models and vides.
*/

class Controller {

  public function setModel($model){
    if(file_exists('../app/models/'.$model.'.php')){
      require_once '../app/models/'.$model.'.php';
      return new $model;
    } else {
      die("Model: ".$model." does not exist !");
    }


  }

  public function setView($view,$data = []){

    if(file_exists('../app/views/'.$view.'.php')){
      require_once '../app/views/'.$view.'.php';
    } else {
      die("View: ".$view ." does not exist !");
    }


  }

}


 ?>
