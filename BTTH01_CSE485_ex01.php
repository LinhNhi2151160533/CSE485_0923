<?php
$arrs = [2, 5, 6, 9, 2, 5, 6, 12 ,5];

//Hàm tổng
function Sum($arrs){
    $sum = 0;

    for ($i = 0 ; $i < count($arrs) ; $i++){
        $tong = $tong + $arrs[$i];
    }

    return $tong;
}

//Hàm hiệu
function Product($arrs){
    $hieu = $arrs[0];

    for ($i = 1 ; $i < count($arrs) ; $i++){
        $hieu = $hieu - $arrs[$i];
    }

    return $hieu;
}

//Hàm tích
function tich($arrs){
    $tich = 1;

    for ($i = 0 ; $i < count($arrs) ; $i++){
        $tich = $tich * $arrs[$i];
    }

    return $tich;
}

//Hàm thương
function thuong($arrs){
    $thuong = $arrs[0];

    for ($i = 1 ; $i < count($arrs) ; $i++){
        $thuong = $thuong / $arrs[$i];
    }

    return $thuong;
}

echo "Tổng các phần tử = " . implode(' + ' , $arrs) . " = " . tong($arrs) . "<br>";
echo "Hiệu các phần tử = " . implode(' - ' , $arrs) . " = " . hieu($arrs) . "<br>";
echo "Thương các phần tử = " . implode(' / ' , $arrs) . " = " . thuong($arrs) . "<br>";
echo "Tích các phần tử = " . implode(' + ' , $arrs) . " = " . tich($arrs) . "<br>";
