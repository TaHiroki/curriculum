<?php
  require_once('db_connect.php');

  $sql = "SELECT * FROM books";
  $pdo = db_connect();
  try{
    $stmt = $pdo->query($sql);
  }catch(PDOException $e){
    echo 'Error: ' . $e->getMessage();
    die();
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

    <title>在庫管理システム</title>
  </head>
  <body>

    <div id="main" class="container">
      <h2>在庫一覧画面</h2>
      <div class="row mb-4 mt-4">
        <button type="button" class="btn btn-primary ml-4 mr-4" onclick="location.href='new_book.php'">新規登録</button>
        <button type="button" class="btn btn-secondary" onclick="location.href='logout.php'">ログアウト</button>
      </div>
      <div class="row">
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">タイトル</th>
              <th scope="col">発売日</th>
              <th scope="col">在庫数</th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
          <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)):?>
            <tr>
              <th><?php echo $row['title'] ?></th>
              <th><?php echo $row['date'] ?></th>
              <th><?php echo $row['stock'] ?></th>
              <th><button type="button" class="btn btn-danger" onclick="location.href='delete_book.php?id=<?php echo $row['id'] ?>'">削除</button></th>
            </tr>
          <?php endwhile ?>
          </tbody>
        </table>
      </div>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>