<!--問題 7:
次のような配列 fruits を作成し、for i ループを使用して各フルーツを表示する PHP プログラムを作成してください。-->
$fruits = ["Apple", "Banana", "Cherry", "Date", "Elderberry"];

<?php
$fruits = ["Apple", "Banana", "Cherry", "Date", "Elderberry", "peach"];



for($i =0; $i < count($fruits); $i++ ){
    echo $fruits[$i]. "\n";
}
?>