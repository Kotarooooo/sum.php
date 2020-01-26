<?php

function sum (){
    
    $result = 0;
    
    for($i = 1; $i <=10; $i++){
        $result += $i;
    }

    return $result;
}
 echo sum() . "\n";

function nibai ($a) {
    return $a * 2;
    }
echo nibai(2) . "\n";
function f($a,$b) {
    return $a + $b;
    }
echo f(5,10) . "\n";

function kakeru($arr) {
    $result = 1;   
    foreach ($arr as $a) { 
            $result *=  $a;
        
        
        
    }
    return $result; 
    
    
    
}
echo kakeru(array(1, 3, 5, 7, 9 )) . "\n";
?>

<?php

function max_array($arr){
    $max_number = $arr[0];
    foreach($arr as $a){
        
        
        
        
        
   
    
    }
    return $max_number;
}
?>

<?php
$str = "<h1>strip_tags関数</h1>"
  . "<p>タグを取り除く</p>";
echo strip_tags($str) ."\n";

$fruits = [0=>'orange', 1=>'banana', 2=>'pineapple'];
 
//連想配列をキーと値１次元配列に分解する
foreach($fruits as $key => $value){
  $fruits_key[] = $key;
  $fruits_val[] = $value;
}
 
//キーと値の配列それぞれに値を追加する
array_push($fruits_key, 3, 4);
array_push($fruits_val, 'banana', 'banana');
 
//array_combineでキーと値の配列をマージする
$fruits = array_combine($fruits_key, $fruits_val);
 
print_r($fruits);

$items1 = ['abc', 'efg2', 'hij'];
$items2 = ['klm', 'mnl'];
$items3 = ['opq', 'rst'];
 
//配列を結合する
$item_merge = array_merge($items1, $items2, $items3);
 
print_r($item_merge);

$nextWeek = time() + (7 * 24 * 60 * 60);
                   // 7 日 * 24 時間 * 60 分 * 60 秒
echo 'Now:       '. date('Y-m-d') ."\n";

echo date("M-d-Y", mktime(0, 0, 0, 1, 26, 20));
"\n";
// 使用するデフォルトのタイムゾーンを指定します。PHP 5.1 以降で使用可能です。
date_default_timezone_set('UTC');

echo date("l");






















