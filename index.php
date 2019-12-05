<!DOCTYPE html>
<h2>Practice</h2>
<pre>
<?php
//DB情報を読み込み
require_once("database.php");

$records = $dbh->query('SELECT * FROM my_items');

while ($record = $records->fetch()) {
  print($record['item_name']. "\n");
}
?>
</pre>
</html>