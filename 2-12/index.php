<form action="result.php" method="post">
  お名前：<input type="text" name="name" /><br>
  ご希望商品：
    <input type="radio" name="award" value="A" />A賞
    <input type="radio" name="award" value="B" />B賞
    <input type="radio" name="award" value="C" />C賞
    <br>
  個数：
    <select name="number">
      <?php for($i = 1; $i <= 10; $i++):?>
        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
      <?php endfor ?>
    </select>
    <br>
  <input type="submit" value="申込" />
</form>

<?php
  /*
    用語：モジュール
    交換可能な構成要素を意味する。モジュールを組み合わせてHPやWebアプリを
    作ることで、変更などがあっても、その部分を交換するだけで良くなる。
    用語：バージョン管理システム
    ファイルに対して誰がどんな変更をしたなどを記録することで、過去の状態に戻したり
    差分を表示するようにするシステムのこと。Gitなど
    用語：サブクエリ
    クエリ文の中に含まれる、別のクエリ文。
    サブクエリの結果を元に別の検索を行ったりする。
  */
?> 