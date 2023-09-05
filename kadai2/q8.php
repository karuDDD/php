<!--問題 8:
$pets という名前の配列があり、その中にはいくつかのペットの名前が入っています。foreach ループを使用して、各ペットの名前の長さ（文字数）を表示する PHP プログラムを作成してください。-->
$pets = ["Dog", "Cat", "Rabbit", "Hamster", "Bird"];
<?php
$pets = ["Dog", "Cat", "Rabbit", "Hamster", "Bird"];
foreach($pets as $pets){
    $length = mb_strlen("Dog", "UTF-8");
echo $pets[$pet]. "\n";
}
?>
