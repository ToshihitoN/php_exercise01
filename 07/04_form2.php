<?php

$name = '';
$tel = '';
$email = '';
$item_key = '';
$err_msgs = [];

$items = ['バッグ', '靴', '時計', 'ネックレス', 'ピアス'];

// コードを追記
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    $items_key = $_POST['items'];

    // バリデーション
    if (empty($name)) {
        $err_msgs[] = '名前を入力してください';
    }

    if (empty($tel)) {
        $err_msgs[] = '電話番号を入力してください';
    }

    if (empty($email)) {
        $err_msgs[] = 'メールアドレスを入力してください';
    }
    else {
        foreach ($items as $key) {
            if($items_key == $key){
                $keys = '購入するもの:' . $key;
            }
            # code...
        }
    }
}

?>


<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>個人情報を入力してください</h3>
    <form action="" method="POST">
        <div>
            <?php if (!empty($err_msgs)) : ?>
                <h1>エラーメッセージ</h1>
                <ul>
                    <?php foreach ($err_msgs as $err_msg) : ?>
                        <li><?= $err_msg ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>

            <label for="name">氏名</label><br>
            <input type="text" name="name" id="name"><br>
            <label for="tel">電話番号</label><br>
            <input type="text" name="tel" id="tel"><br>
            <label for="email">メールアドレス</label><br>
            <input type="text" name="email" id="email"><br>
        </div>

        <h1>購入するものを選択してください</h1>

        <select id="items" name="items">
            <?php foreach ($items as $key) {
                echo ('<option value="' . $key . '">' . $key . '</option>');
            } ?>

        </select>
        <div class="submit">
            <input type="submit" value="送信">
        </div>
        <div>

            <?php if ($name && $tel && $email) : ?>
                <h2>以下の内容が送信されました｡</h2>
                <p> 氏名: <?= $name ?><br>
                    電話番号: <?= $tel ?><br>
                    メールアドレス: <?= $email ?><br>
                    <?= $keys?><br>
                </p>
            <?php endif; ?>
        </div>






    </form>

</body>

</html>