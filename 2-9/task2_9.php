<?php
  for($i = 1;$i <= 100; $i++){
    if($i % 3 == 0 && $i % 5 == 0){
      echo 'FizzBuzz!!';
    }elseif($i % 3 == 0){
      echo 'Fizz!';
    }elseif($i % 5 == 0){
      echo 'Buzz!';
    }else{
      echo $i;
    }
    echo '<br>';
  }

  /*
    用語：パフォーマンス
    クエリの性能
    用語：スロークエリ
    実行が２s以上かかるクエリのこと
    用語：クエリログ
    実行された全てのクエリのログ
  */
?>