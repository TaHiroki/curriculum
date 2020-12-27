<?php
  require_once('db_connect.php');

  if(!empty($_POST)){
    if(empty($_POST["name"])){
      echo "名前を入力してください。";
    }
    if(empty($_POST["password"])){
      echo "パスワードを入力してください。";
    }

    if(!empty($_POST["name"]) && !empty($_POST["password"])){
      $name = htmlspecialchars($_POST["name"], ENT_QUOTES);
      $password = htmlspecialchars($_POST["password"], ENT_QUOTES);
      $password_hash = password_hash($password, PASSWORD_DEFAULT);

      $sql = "INSERT INTO users (name, password) VALUES (:name, :password_hash)";
      $pdo = db_connect();
      try{
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":password_hash", $password_hash);
        $stmt->execute();
        header("Location: login.php");
        exit();
      }catch(PDOException $e){
        echo 'Error: ' . $e->getMessage();
        die();
      }
    }
  }
?>


<!doctype html>
<html lang="ja">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>アカウント新規登録</title>
  </head>
  <body>

    <div id="main-signUp" class="container">
    <div class="row">
    <h2>アカウント新規登録</h2>
    </div>
      <form action=""  method="post">
        <input type="text" name="name" placeholder="ユーザー名"><br><br>
        <input type="text" name="password" placeholder="パスワード"><br><br>
        <div class="row">
          <button type="submit" class="btn btn-primary ml-3">新規登録</button>
          <button class="btn btn-success ml-3" onclick="location.href='login.php'">戻る</button>
        </div>
      </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>