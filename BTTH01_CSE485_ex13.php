<?php
$numbers = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];

$average = array_sum($numbers) / count($numbers);

$greaterThanAverage = [];
foreach ($numbers as $number) {
    if ($number > $average) {
        $greaterThanAverage[] = $number;
    }
}

$lessThanOrEqualAverage = [];
foreach ($numbers as $number) {
    if ($number <= $average) {
        $lessThanOrEqualAverage[] = $number;
    }
}

echo "Giá trị trung bình của mảng: " . $average . "<br>";
echo "Các số lớn hơn giá trị trung bình: \n";
echo '<pre>';
print_r($greaterThanAverage);
echo "Các số nhỏ hơn hoặc bằng giá trị trung bình: \n";
print_r($lessThanOrEqualAverage);
?>s