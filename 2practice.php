<?php
$name = "田伏凜太朗";
if ($name=="田伏凜太朗"){
echo "私はあなたの名前です";
} else {
    echo "あなたの名前ではありません";
}
$total = 0;

for ($i = 0; $i <= 10000; $i++) {
    $total += $i;
}
echo $total;
$furuits = array("lemon","banana","orange","apple","kiwi");
foreach ($furuits as $furuits){
 echo $furuits;
 echo "\n";
}
$start = 1;
$end = 100;
for ($i = $start; $i <=$end; $i++){
    if($i % 5 == 0){
        echo $i;
        echo "\n";
    }
}
?>