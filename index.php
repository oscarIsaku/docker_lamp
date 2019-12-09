<!DOCTYPE html>
<h2>Practice</h2>
<pre>
<?php
//DB情報を読み込み
require("database.php");

if (isset($_REQUEST['page']) && is_numeric($_REQUEST['page'])) {
  $page = $_REQUEST['page'];
} else {
  $page = 1;
}


$start = 5 * ($page - 1);
$memos = $dbh->prepare('SELECT * FROM memos ORDER BY id DESC LIMIT ?,5');
$memos->bindParam(1, $start, PDO::PARAM_INT);
$memos->execute();

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

<?php if ($page >= 2): ?>
<a href="index.php?page=<?php print($page-1); ?>"><?php print($page-1); ?>ページ目へ</a>
 |
<?php endif; ?>
<?php 
  $counts = $dbh->query('SELECT COUNT(*) as cnt FROM memos');
  $count = $counts->fetch();
  $max_page = floor($count['cnt'] / 5) ; 1;
  if ($page < $max_page): 
?>
<a href="index.php?page=<?php print($page+1); ?>"><?php print($page+1); ?>ページ目へ</a>
<?php endif; ?>
</article>
</pre>
</html>