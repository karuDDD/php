<!--問題 5:
配列 numbers に 1 から 100000 までの数字を代入し、その合計を計算する PHP プログラムを作成してください。-->
<?php
$numbers = array();
for($i = 0; $i < 10000; $i++){
    $num = $i +1;
    array_push($numbers,$num);
}

for($i = 0; $i < 10000; $i++){
    $num += $i;
}
echo "$num";



?>