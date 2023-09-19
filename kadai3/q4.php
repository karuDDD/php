<!--数値の配列を引数に取り、その要素の合計を返す関数`arraySum`を定義してください。-->
<?php
$array = array(2,3,8);
$result = arraySum($array);
echo $result;
function arraySum($array){
    $num = 0;
    foreach($array as $num){
        $num += $num;
    }
    return $num;
}
  
