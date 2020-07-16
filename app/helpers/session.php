<?php
  SESSION_START();
  function is_logged_in(){
    if (isset($_SESSION['logged_in'])) {
      return true;
    }
  }

  $_SESSION['status']=["on hand","on the way","rady to load","arrived","new purchased","is requested","dispatched","loaded"];
 ?>
