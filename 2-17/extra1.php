<?php
  $sum = 0;
  $count = 1;

  while($sum < 40){
    $dice = rand(1,6);
    $sum += $dice;

    echo "{$count}回目＝{$dice}<br>";

    $count++;
  }   
  echo "合計".($count-1)."回でゴールしました";
?>