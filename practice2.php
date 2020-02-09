
<?php
echo 'hello php!';
$name = "Kotaro";
// もし　$name が　あなたの名前だったら、　ifのあとの　{ }　の中のコードが実行される
// それ以外なら、　else のあとの　{ }　の中のコードが実行される

if ($name == "Kotaro") {
    echo "「私はあなたの名前です」";
} else { 
    echo "「あなたの名前ではありません」";
    
}


echo 'hello php';
echo "\n";
// 変数　$a　に　3 を代入
$a = 3;

// 変数　$b に　7　を代入
$b = 7;

//　変数　$a を出力
echo $a + $b;
echo "\n";

$array_month = ["1月", "2月", "3月", "4月", "5月", "6月", "7月", "8月", "9月", "10月", "11月", "12月"];
echo $array_month[7];
echo "\n";

$hello = "Hello ";
$name = "Kotaro ";
$world = "'s World";
echo $hello . $name . $world;
echo "\n";

$tech_boost = "tech";
$tech_boost .= " boost";
echo $tech_boost;
echo "\n";

$calender_2018 = [
  "January" => "1月",
  "February" => "2月",
  "March" => "3月",
  "April" => "4月",
  "May" => "5月",
  "June" => "6月",
  "July" => "7月",
  "August" => "8月",
  "September" => "9月",
  "October" => "10月",
  "November" => "11月",
  "December" => "12月"
 ];

// 12月を表示する
echo $calender_2018["December"];
echo "\n";
$name = "Kota";
if ($name == "Kotaro") {
  echo "あなたの名前です。";
} else {
  echo "あなたの名前ではありません";
}
echo "\n";
$total = 0;
for ($i = 0; $i <= 10000; $i++) {
  $total += $i;
}
echo $total;
echo "\n";
//$fruits = ("orange" "apple" "banana" "cherry" "grape");
foreach($fruits as $fruits){
  echo "要素は" , $fruits;