<html lang="ja">
<body>
<h1>お問い合わせフォーム </h1>
<form action="example.php" method="post">
  <input type="text" name="comment"><br/>
  <input type="submit" value="送信">
</form>
<?php
  $comment = $_POST['comment'];
  $comment = htmlspecialchars($comment,ENT_QUOTES,'UTF-8');
  echo $comment;
?>
</body>
</html>