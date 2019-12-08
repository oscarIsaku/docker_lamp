
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
  $statement = $dbh->prepare('UPDATE memos SET memo = ? WHERE id = ?');
  $statement->execute(array($_POST['memo'], $_POST['id']));
  ?>
  <p>メモの変更をしました</p>
  <p><a href="index.php">戻る</p>
</main>
</html>