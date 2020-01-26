<?php
echo 'hello php';
echo "\n";
$name = "Kotaro";
if ($name =="Kota") {
    echo "あなたの名前です。";
} else {
    echo "あなたの名前ではありません。";
}
echo"/n";
  for ($i = 0; $i <= 10000; $i++) {
      $total += $i;
  }
echo $total;
echo"/n";
$fruits = array("apple", "lemon", "orange", "banana", "cherry");
foreach ($fruits as $fruit){
    echo "フルーツは" .$fruit;
echo"/n";
}
echo"/n";
$start = 1;
$end = 100;

for($i = $start; $i < $end; $i++){
    if($i / 5 == 0){
        echo $i;
    }
    
    
    
    
}




