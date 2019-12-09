<main>
<h2>Pratice</h2>
<?php
//DB情報を読み込み
require("database.php");

$id = $_REQUEST['id'];
if (!is_numeric($id) || $id <= 0) {
  print('1以上の数字で指定してください');
  exit();
}

$memos = $dbh->prepare('SELECT * FROM memos WHERE id = ?');
$memos->execute(array($_REQUEST['id']));
$memo = $memos->fetch();
?>
<article>
  <pre><?php print($memo['memo']); ?></pre>
  <a href="update.php?id=<?php print($memo['id']); ?>">編集する</a>
   |
  <a href="delete.php?id=<?php print($memo['id']); ?>">削除する</a>
   |
  <a href="index.php">戻る</a>
</article>
</main>