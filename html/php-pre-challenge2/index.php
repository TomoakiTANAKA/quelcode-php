<?php
$array = explode(',', $_GET['array']);

// 修正はここから
for ($i = 0; $i < count($array); $i++) {
    
    if($i == 0) continue;

    // 現在のループindexの数値を左隣と比較して、る比べて大きい内は繰り返す
    $j = $i;
    while($j > 0) {
        if ($array[$j] < $array[$j-1]) {
            // swap
            $temp = $array[$j];
            $array[$j] = $array[$j-1];
            $array[$j-1] = $temp;
        }

        $j--;
    }

}
// 修正はここまで

echo "<pre>";
print_r($array);
echo "</pre>";

// 小さい順にならべる
// http://localhost:10080/php-pre-challenge2/index.php?array=3,2,1,4,15,18,13,99,77,66,1,100,0