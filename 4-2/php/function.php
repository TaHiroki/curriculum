<?php
  function check_user_logged_in(){
    session_start();

    if(empty($_SESSION["user_name"])){
      header("Location: login.php");
    }
  }

  function validates($validateComments){
    if(!empty($validateComments)){
      foreach($validateComments as $comment){
        echo $comment.'<br>';
      } 
    }
  }