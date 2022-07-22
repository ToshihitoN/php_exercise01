<?php
$num1 = '';
$num2 = '';
$num3 = '';
$err_num = '';
$answer ='';
$word = '';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $num1 = $_POST['number1'];
    $num2 = $_POST['number2'];
    $num3 = $_POST['number3'];

    if (empty($num1) || empty($num2)|| empty($num3)) {
        $err_num = '未入力です';
        }else{
        $answer = $num1 + $num2 + $num3;
        $word = '合計値は' . "{$answer}" . 'です。';
        }
}
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
    <h1>数字を入力してください</h1>
    <form action="" method="post">
        <div>
            <?php if (!empty($err_num)): ?>
                <ul>
                    <li><?=$err_num?></li>
                </ul>
            <?php endif; ?>
            <label for="">一つ目の数字</label><br>
            <input type="number" name="number1"><br>
            <label for="">二つ目の数字</label><br>
            <input type="number" name="number2"><br>
            <label for="">三つ目の数字</label><br>
            <input type="number" name="number3"><br>
            </div>
        <div>
            <input type="submit" value="送信">
        </div>
    </form>
        <div>
            <?=htmlspecialchars($word, ENT_QUOTES, 'UTF-8')?>
        </div>
</body>
</html>
