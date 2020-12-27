<?php
  require_once("db_connect.php");

  require_once("function.php");

  check_user_logged_in();

  if(!empty($_POST)){
    $validateComments = [];

    if(empty($_POST["title"])){
      $validateComments[] = "タイトルを入力してください。";
    }
    if(empty($_POST["date"])){
      $validateComments[] = "発売日を入力してください。";
    }elseif(!preg_match('/\d{4}-\d{1,2}-\d{1,2}/', $_POST["date"] )){
      $validateComments[] = "年-月-日 の形で入力してください。";
    }
    if($_POST["stock"] == "notSelect"){
      $validateComments[] = "在庫数を選択してください。";
    }

    if(!empty($_POST["title"] && !empty($_POST["date"]) && $_POST["stock"] != "notSelect")){
      $title = htmlspecialchars($_POST['title'], ENT_QUOTES);
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

    <title>在庫管理システム:新規登録</title>
  </head>
  <body>
    <div id="main-new-book" class="container">
      <h2>本  登録</h2>

      <div class="validateComments">      
        <?php validates($validateComments); ?>
      </div>

      <form action=""  method="post">
        <input type="text" name="title" placeholder="タイトル"><br><br>
        <input type="text" name="date" placeholder="発売日(年-月-日)"><br><br>
        <p>在庫数</p>
        <select name="stock">
          <option value="notSelect">選択してください</option>
          <?php for($i = 1; $i <= 20; $i++): ?>
            <option value="<?php echo $i * 5 ?>"><?php echo $i * 5 ?></option>
          <?php endfor ?>
        </select><br><br>
        <div class="row">
        <button type="submit" class="btn btn-primary ml-3">登録</button>
        <button type="button" class="btn btn-success ml-4 mr-4" onclick="location.href='main.php'">戻る</button>
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