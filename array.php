<?php

// これはコメントアウトです
// コメントアウトはプログラムとして認識されず自由に書くことができます。

// このファイルは ターミナルで　php array.php　と打つと実行されます。
// https://www.tohoho-web.com/php/array.html#array

$array = array('Sun', 'Mon', 'Tue');
echo $array[0];    // Sun が出力される
echo $array[1];    // Mon が出力される
echo $array[2];    // Tue が出力される

// 名前(キー)付き配列
$array['Sun'] = 'Sunday';
$array['Mon'] = 'Monday';
$array['Tue'] = 'Tuesday';
echo $array['Sun'];   // Sunday が出力される
echo $array['Mon'];   // Monday が出力される
echo $array['Tue'];   // Tuesday が出力される


// 名前(キー)付き配列　省略形
$array = array(
    'Sun' => 'Sunday',
    'Mon' => 'Monday',
    'Tue' => 'Tuesday',   // ここのカンマ(,)は省略してもよい
);
echo $array['Sun'];   // Sunday が出力される
echo $array['Mon'];   // Monday が出力される
echo $array['Tue'];   // Tuesday が出力される

$color_list = array("Red", "Green", "Blue");
foreach ($color_list as $color) {
    echo "$color\n";                        // Red, Green, Blue が表示される
}
?>