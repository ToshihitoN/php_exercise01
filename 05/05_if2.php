<?php

$subjects = ['数学', '英語', '理科', '社会', '国語'];

// ここに処理を記述
foreach ($subjects as $key) {
    switch ($key) {
        case '数学':
            // echo $key . 'の試験は明日です。'. PHP_EOL;
            $day = '明日';
            break;
        case '英語':
            // echo $key . 'の試験は明後日です。'. PHP_EOL;
            $day = '明後日';
            break;
        case '理科':
            // echo $key . 'の試験は明明後日です。'. PHP_EOL;
            $day = '明明後日';
            break;
        case '社会':
            // echo $key . 'の試験は昨日です。'. PHP_EOL;
            $day = '昨日';
            break;
        case '国語':
            // echo $key . 'の試験は中止です。'. PHP_EOL;
            $day = '中止';
            break;
        default:
            # code...
            break;
    }
    echo $key . 'の試験は' . $day . 'です。' . PHP_EOL;

    # code...
}
