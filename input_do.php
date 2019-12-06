<h2>Practice</h2>
<pre>
<?php
//DB情報を読み込み
require("database.php");

try {
  $statement = $dbh->prepare('INSERT INTO memos SET memo=?, created_at=NOW()');
  $statement->bindParam(1, $_POST['memo']);
  $statement->execute();
  echo "メッセージが登録されました";
} catch (PDOException $e) {
  echo 'DBデータ登録エラー: '. $e->getMessage();
}


?>
</pre>