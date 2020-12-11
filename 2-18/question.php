<link rel="stylesheet" href="style2.css">

<?php
//POST送信で送られてきた名前を受け取って変数を作成
$name = $_POST["name"];

//①画像を参考に問題文の選択肢の配列を作成してください。
$choices1 = [80, 22, 20, 21]; 
$choices2 = ["PHP", "Python", "JAVA", "HTML"];
$choices3 = ["join", "select", "insert", "update"];
//② ①で作成した、配列から正解の選択肢の変数を作成してください
$a0 = [80,"HTML","select"];
?>
<!--POST通信で送られてきた名前を出力-->
<p>お疲れ様です<?php echo $name ?>さん</p>

<!--フォームの作成 通信はPOST通信で-->
<form action="answer.php" method="post">
  <h2>①ネットワークのポート番号は何番？</h2>
  <!--③ 問題のradioボタンを「foreach」を使って作成する-->
  <?php foreach($choices1 as $choice): ?>
    <input type="radio" name="q0" value="<?php echo $choice?>" /><?php echo $choice?>
  <?php endforeach ?>

  <h2>②Webページを作成するための言語は？</h2>
  <!--③ 問題のradioボタンを「foreach」を使って作成する-->
  <?php foreach($choices2 as $choice): ?>
    <input type="radio" name="q1" value="<?php echo $choice?>" /><?php echo $choice?>
  <?php endforeach ?>

  <h2>③MySQLで情報を取得するためのコマンドは？</h2>
  <!--③ 問題のradioボタンを「foreach」を使って作成する-->
  <?php foreach($choices3 as $choice): ?>
    <input type="radio" name="q2" value="<?php echo $choice?>" /><?php echo $choice?>
  <?php endforeach ?>

  <!--問題の正解の変数と名前の変数を[answer.php]に送る-->
  <br>
  <input type="hidden" name="name" value="<?php echo $name ?>" />
  <!-- postは配列を送れないので文字列へ -->
  <input type="hidden" name="answer" value="<?php echo implode("@",$a0) ?>" />

  <input id="btn2" type="submit" value="回答する"> 
</form>