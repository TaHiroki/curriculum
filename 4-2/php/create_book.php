<?php
  require_once("db_connect.php");

  $title = $_POST["title"];
  $date = $_POST["date"];
  $stock = $_POST["stock"];

  $sql = "INSERT INTO books (title, date, stock) VALUES (:title, :date, :stock)";
  $pdo = db_connect();
  try{
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':title', $title);
    $stmt->bindParam(':date', $date);
    $stmt->bindParam(':stock', $stock);
    $stmt->execute();
    header("Location: main.php");
    exit;
  }catch(PDOException $e){
    echo 'Error: ' . $e->getMessage();
    die();
  }
?>