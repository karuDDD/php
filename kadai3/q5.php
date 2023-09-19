<!--文字列を引数に取り、その文字列を反転したものを返す関数`reverseString`を定義してください。-->
<?php
$num = "abcdefg";
$word =  reverseString($num);
 echo $word;

 function reverseString($num){
    var_dump( strrev($num) );
 }
?>