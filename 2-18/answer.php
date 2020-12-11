<link rel="stylesheet" href="style3.css">

<?php 
//[question.php]から送られてきた名前の変数、選択した回答、問題の答えの変数を作成
$name = $_POST["name"];
$answers = explode("@",$_POST["answer"]);
$selects = [];
for($i = 0; $i <3; $i++){
  $selects[] = $_POST["q".$i];
}
//選択した回答と正解が一致していれば「正解！」、一致していなければ「残念・・・」と出力される処理を組んだ関数を作成する
function judgement($select, $answer){
  if( $select == $answer){
    echo "正解！";
  }else{
    echo "残念・・・";
  }
}
?>

<!--POST通信で送られてきた名前を表示-->
<p><?php echo $name ?>さんの結果は・・・？</p>
<p>①の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php judgement($selects[0], $answers[0]) ?>

<p>②の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php judgement($selects[1], $answers[1]) ?>

<p>③の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php judgement($selects[2], $answers[2]) ?>