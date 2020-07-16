<?php
  class controller {
    protected function model($model,$info=[]){
      if (file_exists("../app/foundation/models/{$model}.php")) {
        require_once("../app/foundation/models/{$model}.php");
        return new $model;
      }
    }
    protected function view($view,$data=[],$data1=[],$data2=[],$data3=[],$data4=[],$data5=[],$i=1){
      if (file_exists("../app/foundation/views/{$view}.php")) {
        require_once("../app/foundation/views/{$view}.php");
      }else{
        die("view doesnt exist");
      }
    }
  }
 ?>
