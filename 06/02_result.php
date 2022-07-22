<?php
//$moji1 = $_GET['text1'];
$msg = $_POST['message'];
function escape1($str)
{
  return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>submit</title>
</head>
<body>
  <p>私の名前は、<?= escape1($msg) ?>です。</p>
</body>
</html>

<a href="02_form.php">戻る</a>
