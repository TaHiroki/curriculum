<?php
  require_once('db_connect.php');

  require_once('function.php');

  session_start();

  if(!empty($_POST)){
    $validateComments = [];
    //ヴァリデーション
    if(empty($_POST["name"])){
      $validateComments[] = "名前が未入力です。";
    }
    if(empty($_POST["password"])){
      $validateComments[] = "パスワードが未入力です。";
    }

    //名前検索
    if(!empty($_POST["name"]) && !empty($_POST["password"])){
      $name = htmlspecialchars($_POST["name"], ENT_QUOTES);
      $password = htmlspecialchars($_POST["password"], ENT_QUOTES);

      $sql = "SELECT * FROM users WHERE name = :name";
      $pdo = db_connect();
      try{
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(":name", $name);
        $stmt->execute();
      }catch (PDOException $e) {
        $validateComments[] = "名前が一致しません。";
        die();
      }

    //パスワードチェック
    if($row = $stmt->fetch(PDO::FETCH_ASSOC)){
      if(password_verify($password, $row["password"])){
        $_SESSION["user_id"] = $row["id"];
        $_SESSION["user_name"] = $row["name"];
        header("Location: main.php");
        exit();
      }else {
        $validateComments[] = "パスワードが間違っています。";
      }
    }else{
      $validateComments[] = "ユーザー名かパスワードに誤りがあります。";
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
    <link rel="stylesheet" href="../css/style.css">

    <title>ログイン</title>
  </head>
  <body>

    <div id="main-login" class="container">
    <div class="row">
      <h2>ログイン</h2>
    <button class="btn btn-info ml-5 mb-5" onclick="location.href='signUp.php'">新規ユーザー登録</button>
    </div>

    <div class="row validateComments">      
      <?php validates($validateComments); ?>
    </div>

    <div class="row"></div>
      <form action=""  method="post">
        <input type="text" name="name" placeholder="ユーザー名"><br><br>
        <input type="password" name="password" placeholder="パスワード"><br><br>
        <button type="submit" class="btn btn-primary">ログイン</button>
      </form>
    </div>
  </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>