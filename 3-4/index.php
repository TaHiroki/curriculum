<?php
  require_once("getData.php");
  $data = new getData();
  $user = $data->getUserData();
  $posts = $data->getPostData();
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>３章チェクテスト</title>
  <link rel="stylesheet" href="reset.css">
  <link rel="stylesheet" href="style.css">
</head>
<body>
<div id="main">
  <div id="header" class="clearfix">
    <div id="left"><img src="logo.png"></div>
    <div id="right">
      <div id="up">
        <span><?php echo "ようこそ {$user["first_name"]}{$user["last_name"]} さん"; ?></span>
      </div>
      <div id="bottom">
        <span><?php echo "最終ログイン日：{$user["last_login"]}"; ?></span>
      </div>
    </div>
  </div>

  <div id="list">
    <table>
      <tr id="list-name">
        <th>記事ID</th>
        <th>タイトル</th>
        <th>カテゴリ</th>
        <th>本文</th>
        <th>登校日</th>
      </tr>
      <?php while($post = $posts->fetch(PDO::FETCH_ASSOC)): ?>
        <tr>
          <td><?php echo $post["id"]; ?></td>
          <td><?php echo $post["title"]; ?></td>
          <td><?php 
            if($post["category_no"] == 1){
              echo "食事";
            }else if($post["category_no"] == 2){
              echo "旅行";
            }else{
              echo "その他";
            }
          ?></td>
          <td><?php echo $post["comment"]; ?></td>
          <td><?php echo $post["created"]; ?></td>
        </tr>
      <?php endwhile ?>
    </table>     
  </div>

  <div id="footer">
    <p>Y&I group.inc</p>
  </div>
</div>
  
</body>
</html>