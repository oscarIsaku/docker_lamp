
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

    $memos = $dbh->prepare('SELECT * FROM memos WHERE id = ?');
    $memos->execute(array($id));
    $memo = $memos->fetch();
  }

  ?>
  <form action="update_do.php" method="post">
    <input type="hidden" name="id" value="<?php print($id); ?>">
    <textarea name="memo" cols="50" rows="10"><?php print($memo['memo']); ?></textarea>
    <br>
    <button type="submit">登録する</button>
  </form>
</main>
</html>