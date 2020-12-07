<?php
  $fruits = ["apple" =>"りんご", "orange" => "みかん", "peach" => "もも"];

  foreach($fruits as $key=>$value){
    echo "{$key}といったら{$value}";
    echo "<br>";
  }
  /*
    用語：トランザクション
    複数の処理をまとめたもの。途中の処理で失敗はなく、通しで成功か失敗しかない
    用語：排他ロック
    １つの資源に同時接続するとき、データの整合性を確保するために、
    １つ以外の処理をロックすること
    用語：チューニング
    性能の悪いクエリを改善すること
  */
?>