<?php
  require_once('db_connect.php');

  require_once("function.php");

  check_user_logged_in();


  $id = $_GET['id'];
  if(empty($id)){
    header("Location: main.php");
    exit;
  }

  $sql = "DELETE FROM books WHERE id = :id";
  $pdo = db_connect();
  try{
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    header("Location: main.php");
  }catch(PDOException $e){
    echo 'Error: ' . $e->getMessage();
    die();
  }