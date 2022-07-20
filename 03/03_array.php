<?php

$nums = [
    [1, 2],
    [3, 4],
    [5, 6, 7]
];

echo $nums[1][1] . PHP_EOL;
echo $nums[2][2] . PHP_EOL;
echo $nums[2][1] . PHP_EOL;
echo $nums[2][0] . PHP_EOL;
echo $nums[0][0] . PHP_EOL;
echo $nums[1][0] . PHP_EOL;
echo $nums[0][1] . PHP_EOL;

// ここにコードを記述

// $ php 03/03_array.php
// 4
// 7
// 6
// 5
// 1
// 3
// 2
