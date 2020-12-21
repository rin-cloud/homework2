<?php
function duble($max){
    $result = $max*2;
    return $result;
}
echo duble(10);
function f($a, $b){
    $result2 = $a + $b;
    return $result2;
}
echo f (10, 2);
function multiplyArray(array $array): float  // （1）
{
    $num = 1;
    foreach($array as $value) {
        $num *= $value;
    }
    return $num;  // （2）
}
    
$list = [1,3,5,7,9];  // （3）
$result = multiplyArray($list);  // （4）
print($result);
function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
 $max_number = $arr[0];
 foreach($arr as $a){
 //どうしたらいいかわからない・・・・
 if($max_number < $a){
 $max_number = $a;
 }
 }
 return $max_number;
 }
 echo max_array(array(9,0,39,22));
$string = '<a href="http://google.com">Google</a>';
$result = strip_tags($string);
echo $result;
$data = array("A", "B", "C");
array_push($data, "D", "E");
print_r($data);
$data = array("TV1" => "500", "TV2" => "1000", "RADIO1" => "800");
$add_data = array("TV1" => "2000", "RADIO2" => "600");
$result = array_merge($data, $add_data);
print_r($result);
$now = time();
print $now;$timestamp = mktime(0, 0, 0, 21, 12, 2020);
print $timestamp;
$timestamp = time() + (60 * 60 * 24) * 7;
$next_week = date('Y年m月d日H時i分s秒', $timestamp);
print $next_week;
?>