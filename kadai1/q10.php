<!--問題 10（上級）:
変数 grade（成績）があります。grade が 90 以上なら「You got an A」、80 以上 90 未満なら「You got a B」、70 以上 80 未満なら「You got a C」、60 以上 70 未満なら「You got a D」、それ以外の場合は「You got an F」と表示する PHP プログラムを作成してください。-->
<?php
$grade=70;

if ($grade >= 90) {
    echo "You got an A";
} elseif ($grade >= 80) {
    echo "You got a B";
} elseif ($grade >= 70) {
    echo "You got a C";
} elseif ($grade >= 60) {
    echo "You got a D";
} else {
    echo "You got an F";
}
?>