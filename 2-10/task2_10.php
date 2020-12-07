<?php
/*
  $length = 10;
  $side = 5;
  $height = 8;
*/

  function volume($length, $side, $height){
    return $length * $side * $height;
  }

  echo volume(10,5,8);

  /*
    用語：ハッシュ化
    特定の文字列や数字羅列をハッシュ関数（一定のルール）で置き換えること。
    不可逆の変換を行うことで、万が一漏洩しても安全になる。
    暗号がと違うのは、可逆か不可逆か。
    用語：総合テスト
    テストの種類の一つ。開発したシステム全体について用件を満たしているか検証する。
    他にも、単体テスト・結合テストがありそれぞれテストする範囲が違う。
    用語：デバッグ
    バグや欠陥を発見して修正すること
  */
?>