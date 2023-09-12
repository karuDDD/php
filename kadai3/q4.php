<!--数値の配列を引数に取り、その要素の合計を返す関数`arraySum`を定義してください。-->
<?php
$numbers = ("1,2,3,4,5,6,7,8,9,10");

function arraySum($numbers) {
    $sum = 0; 

    foreach ($numbers as $number) {
        $sum += $numbers;
    }

    return $sum; 
}

  
