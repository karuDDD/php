<!--整数を引数に取り、その数が偶数であれば"Even"、奇数であれば"Odd"という文字列を返す関数`evenOrOdd`を定義してください-->
<?php
$number = ("1.2.3.4.5.6.7.8.9.10");

function evenOrOdd($number) {
    if ($number % 2 === 0) {
        return "Even";
    } else {
        return "Odd";
    }
}

?>