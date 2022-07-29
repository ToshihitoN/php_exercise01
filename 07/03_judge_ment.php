<?php
$page = '';

$page = $_GET['page'];

// echo $page;

if ($page == 1) {
    echo '合格';
    echo '<br>';
} else {
    echo '不合格';
    echo '<br>';
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

    <a href="03_form2.php">戻る</a>
    </form>
</body>

</html>


<!-- http://localhost/07/03_judge_ment.php?   page=2
http://localhost/06/get.php?             page=3              &keywords=PHP -->
