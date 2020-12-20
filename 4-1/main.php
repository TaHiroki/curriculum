<?php
  require_once('function.php');
  require_once('db_connect.php');

  check_user_logged_in();

  $pdo = db_connect();
  try{
  $sql = "SELECT * FROM posts ORDER BY id ASC";
  $stmt = $pdo->query($sql);
  }catch(PDOException $e){
    echo 'Error:'.$e->getMessage();
    die();
  }
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>メイン</title>
</head>
<body>
    <h1>メインページ</h1>
    <p>ようこそ<?php echo $_SESSION["user_name"]; ?>さん</p>
    <a href="logout.php">ログアウト</a><br>
    <a href="create_post.php">記事投稿！</a>
    <table>
    <tr>
        <td>記事ID</td>
        <td>タイトル</td>
        <td>本文</td>
        <td>投稿日</td>
    </tr>
    <?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['title']; ?></td>
            <td><?php echo $row['content']; ?></td>
            <td><?php echo $row['time']; ?></td>
        </tr>
    <?php } ?>
</table>
</body>
</html>