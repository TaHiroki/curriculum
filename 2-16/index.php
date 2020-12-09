<?php
//ファイルの書き込み
  $testFile = "test.txt";
  $contents = "こんにちは！";

  if(is_writable($testFile)){
    //fpはファイルポインタで、どこからファイルに
    //読み書きや書き込みをするのかの始まりの位置
    //ファイルの読み書きするのに必要な情報がまとまっている

    $fp = fopen($testFile, "a");

    fwrite($fp, $contents);

    fclose($fp);

    echo "finish writing!";

  }else{
    echo "not writable";
    exit;
  }

  //ファイルの読み込み
  $test_file = "test2.txt";

  if(is_readable($test_file)){
    $fp = fopen($test_file, "r");

    while($line = fgets($fp)){
      echo $line.'<br>';
    }

    fclose($fp);
    
  }else {
    echo "not readable";
    exit;
  }

  /*
    用語：CakePHPの2系・3系の違い
      ディレクトリ名の変更
      Composer(PHPの依存性管理ツール)でインストールができる
      DBからデータの取得も簡単に書けるようになった
    用語：LAMP
      サーバー環境構築に使うアプリの頭文字
      L:Linux
      A:Apache
      M:MySQL
      P:PHP
    用語：AWS
      Amazonが提供するクラウドコンピューティングサービスの総称
      AmazonWebServices
  */

?>