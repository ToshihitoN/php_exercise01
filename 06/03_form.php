<?php 

$msg = '';
$err_msg = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $msg = $_POST['message'];

if (empty($msg)) {
    $err_msg = '未入力です';
    }else{
        $msg = '私は'. $_POST['message']. '歳です';
    }
// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     $msg = '私は'. $_POST['message']. '歳です';
}
// }


?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>フォームの練習</title>
</head>
<body>
    <h1>POSTメソッド</h1>
    <form action="" method="post">
        <div>
            <?php if (!empty($err_msg)): ?>
                <ul>
                    <li><?=$err_msg?></li>
                </ul>
            <?php endif; ?>
            <label for="">年齢</label><br>
            <input type="text" name="message" id="">
        </div>
        <div>
            <input type="submit" value="送信">
        </div>
        <div>
        <?=htmlspecialchars($msg, ENT_QUOTES, 'UTF-8')?>
        </div>
    </form>
    

    <!-- <p><?php echo $msg; ?></p> -->


</body>
</html>
