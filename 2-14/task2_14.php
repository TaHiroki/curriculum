<?php
  $fruits = ["apple","orange","lemon","banana"];
  echo "count<br>";
  echo count($fruits);//4
  echo '<br><br>';

  echo "sort<br>";
  sort($fruits);
  echo var_dump($fruits);
  echo '<br><br>';

  echo "in_array<br>";
  var_dump(in_array("orange", $fruits));// true
  echo '<br><br>';

  echo "implode<br>";
  echo implode("@", $fruits);
  echo '<br><br>';

  echo "explode<br>";
  $fruits2 = implode("@", $fruits);
  echo var_dump(explode("@", $fruits2));
  echo '<br><br>';

  /*
    用語：要件定義(要求仕様書)
      用件定義：クライアントの必要としている機能や要求をわかりやすくまとめること
      要求仕様書：クライアントが開発担当側に開発を依頼するシステム要求を文章化したもの
    用語：単体テスト・結合テスト
      総合テストはシステム全体のテストだが、それぞれの細かく分けたテストが単体・総合テストに当たる
      単体テスト：モジュールの動作テスト。例えばボタンごとにテストする。
      結合テスト：モジュールを組み合わせた機能テスト。
    用語： テスト仕様書(どのようなもの、項目)
      用件定義書の通りに機能するかどうか、テストするポイントをまとめたもの
        統合テスト、単体テスト、結合テスト
  */
?>