<?php

echo '$numの値を入力して下さい: ';
$num = trim(fgets(STDIN));



// ここに処理を記述
if($num == 1){
    echo $num . 'は素数ではありません';
}

for ($i = 2; $i < $num  ; $i++) { 
    if($num % $i == 0){
        echo $num . 'は素数ではありません';
        break;
    }
    
}
if($i == $num ){
    echo $num . 'は素数です';

}
