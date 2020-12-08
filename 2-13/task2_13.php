<?php
  echo "切り上げ<br>";
  $x = 3.1;
  echo ceil($x); //4
  echo '<br>';
  $x = -2.6;
  echo ceil($x); //-2
  echo '<br><br>';

  echo "切り捨て<br>";
  $x = 6.3;
  echo floor($x);//6
  echo '<br>';

  echo "四捨五入<br>";
  $x = 4.4;
  echo round($x);//4
  echo '<br>';
  $x = 9.4037;
  echo round($x, 3);//9.404
  echo '<br><br>';

  echo "円周率<br>";
  echo pi();//3.14~~
  echo '<br>';
  echo "円の面積(半径10)<br>";
  echo round(10 * 10 * pi());//314
  echo '<br><br>';

  echo "乱数<br>";
  echo mt_rand(1,10);//int
  echo '<br>';
  echo mt_rand(50,200);//int
  echo '<br><br>';

  echo "文字列(apple banana orange)<br>";
  $str = "apple banana orange";
  echo strlen($str);//19
  echo '<br>';
  echo strpos($str, "n");//8
  echo '<br>';
  echo substr($str, 6, 6);//banana
  echo '<br>';
  echo str_replace("orange", "ORANGE", $str);//apple banana ORANGE
  echo '<br>';
  echo str_replace(" ", "", $str);//applebananaorange
  echo '<br>';
  $str = "さしすせそ";
  echo mb_substr($str, 2, 2);//すせ
  echo '<br><br>';

  echo "printf<br>";
  $today = "今年";
  $year = 2020;
  $id = 5; 
  printf("ID:%03dさん、%sも%d年が終わります！", $id, $today, $year);
  echo '<br>';
  $test = sprintf("%03d , %02d , %d", 3, 2, 1);
  echo $test;

  /*
    用語：PostgreSQL・Oracle SQL
      PostgreSQL:MySQL系のRDB管理システム,関数などの機能が強い
      Oracle SQL:オラクル社が開発したRDB管理システム
    用語：TortoiseGit・TortoiseSVN
      TortoiseGit:Gitをより扱いやすくするために開発されたWindows用ソフトウェア
      TortoiseSVN:SVNをGUIで扱いやすくしたwindows用のソフト
    用語：外部設計・内部設計
      外部設計：システムの仕様を決める段階で、基本的にユーザーに向けた仕様を設計する
      内部設計：外部設計を基に、システム内部の動作や機能などの設計を行う
  */
?>