<?php
$name=$_POST['esm'];
$family=$_POST['family'];
$arabi=$_POST['arabi'];
$farsi=$_POST['farsi'];
$alom=$_POST['alom'];
$reuazi=$_POST['reuazi'];
$family=$_POST['family'];
$family=$_POST['family'];
$family=$_POST['family'];
$family=$_POST['family'];
$moadel=($arabi+$farsi+$alom+$reuazi)/4;

if ($moadel>12) {
    $vaziat = 'قبول شده است ';
}else{
    $vaziat = 'مردود شده است';
}

echo 'دانش آموز : ' . $name . '  ' .$family . ' با معدل: '. $moadel . '  ' . $vaziat;
