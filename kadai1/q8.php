<!--問題 8（上級）:
年齢を表す変数 age があります。年齢が 18 歳以上かつ運転免許を持つ変数 hasDrivingLicense が true であれば、「You can drive.」、そうでなければ「You cannot drive.」と表示する PHP プログラムを作成してください。-->
<?php
$age=20;
$hasDrivingLicense = true;

if ($age >= 18 && $hasDrivingLicense) {
    echo "You can drive.";
} else {
    echo "You cannot drive.";
}
?>