<?php



function plus($num1,$num2) { 
    echo $num1 + $num2;
}

plus(10, 20); 

function checkExam($test) {
    if($test >= 80) { 
    return '合格'; }
  else { '不合格'; }
}
    echo checkExam(90); 

function shopping($m , $g ) {

    $sum = ($m *3) * 1.1 + $g * 1.1;
    return '合計金額は' . $sum . '円です';
}
echo shopping(100,500);

function sum($price, $n) {
    return $price * $n;
}

function tax($price) {
    return $price * 1.1;
}
 echo shopping(100,300,800);


//みかん１００円
//ぶどう３００円
//スイカ８００円

//Aさんはみかん３つとぶどう２つとスイカ１つ
//Bさんはみかん５つとぶどう３つとスイカ２つ
//Aさんは所持金３０００円
//Bさんは所持金５０００円
//Q1　他の人でも使えるような関数(商品固定)
//Q2 それぞれのお釣りはいくらか？

//財布-買った金額
function change($wallet, $buy) {
    return $wallet - $buy;
}

//買った金額
function price($n1, $n2, $n3){
$priceMikan = 100;
$priceGrape = 300;
$priceWatermelon = 800;
$mikan = $priceMikan * $n1;
$grape = $priceGrape * $n2;
$waterMelon = $priceWatermelon * $n3;
return $mikan + $grape + $waterMelon;
}

//それぞれの金額を出した
$buyA = price(3, 2, 1);
$buyB = price(5, 3, 2);

//金額、出てこいやっ！
echo change(3000, $buyA) . '<br>';
echo change(5000, $buyB) . '<br>';
