<?php
  $messages = ["おはようございます", "こんにちは", "こんばんは"];

  date_default_timezone_set('Asia/Tokyo');
  $hour = (int)date('H',time());//intへ型キャスト

  echo "今{$hour}時台です<br>";

  if($hour >= 6 && $hour <= 9){
    echo $messages[0];
  }elseif($hour > 9 && $hour <= 18){
    echo $messages[1];
  }elseif($hour > 18 && $hour <= 23){
    echo $messages[2];
  }

?>