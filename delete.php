
<?php 
//DB情報を読み込み
require("database.php");
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
</head>
<main>
  <h2>Practice</h2>
  <?php
  if (isset($_REQUEST['id']) && is_numeric($_REQUEST['id'])) {
    $id = $_REQUEST['id'];
    $statement = $dbh->prepare('DELETE FROM memos WHERE id = ?');
    $statement->execute(array($id));
  }
  ?>
  <pre>
  <p>メモを削除しました</p>
  <p><a href="index.php">戻る</a></p>
  </pre>
</main>
</html>