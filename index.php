<!DOCTYPE html>
<h2>Practice</h2>
<pre>
<?php
//DB情報を読み込み
require("database.php");

$memos = $dbh->query('SELECT * FROM memos ORDER BY id DESC');
?>
<article>
<?php foreach($memos as $memo): ?>
    <p>
      <a href="memo.php?id=<?php print($memo['id']); ?>">
        <?php print(mb_substr($memo['memo'], 0, 50)); ?>
        <?php print((mb_strlen($memo['memo']) > 50 ? '...' : '')); ?>
      </a>
    </p>
    <time><?php print($memo['created_at']); ?></time>
  <hr>
<?php endforeach; ?>
</article>
</pre>
</html>