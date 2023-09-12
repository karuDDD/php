<!--文字列を引数に取り、その文字列の長さ（文字数）を返す関数`stringLength`を定義してください。PHP の組み込み関数`strlen`は使わないでください。-->
<?php
function stringLength($str) {
    $length = 0;
    while (isset($str[$length])) {
        $length++;
    }
    return $length;
}

?>
