<?php 

$msg = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $msg = $_POST['message'];
}


?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>フォームの戻るボタン実装</title>
</head>
<body>
    <form method="post" action="02_result.php">
        <div>
            <label for="">名前</label>
            <input type="text" name="message" id="">
        </div>
        <div>
            <!-- <input type="submit" href='http:localhost/06/02_result.php' value="送信"> -->
            
            <input type="submit" onclick="location.href='/06/02_result.php'" value="送信">
            <!-- submitではURL移動できない -->
        </div>
        <div>
        <?=htmlspecialchars($msg, ENT_QUOTES, 'UTF-8')?>
        </div>
    </form>
    

    <!-- <p><?php echo $msg; ?></p> -->


</body>
</html>
