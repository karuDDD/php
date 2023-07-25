<!--問題 9（上級）:
2 つの変数 temp（温度）と isRaining（雨が降っているか）があります。もし温度が 0 度以下で雨が降っている場合は「It may snow.」、そうでなければ「It is unlikely to snow.」と表示する PHP プログラムを作成してください。-->
<?php
$temp = -5;
$isRaining = true;

if ($temp <= 0 && $isRaining) {
    echo "It may snow.";
} else {
    echo "It is unlikely to snow.";
}
?>