<?php
$arr = [15, 25, 5, 7, 9, 4, 8, 10, 15];


$chieu_dai_cua_mang = array_filter($arr, function($value) {
    return $value % 2 == 1;
});

sort($chieu_dai_cua_mang);

$oddIndex = 0;
for ($i = 0; $i < count($arr); $i++) {
    if ($arr[$i] % 2 == 1) {
        $arr[$i] = $chieu_dai_cua_mang[$oddIndex++];
    }
}

echo implode(" ", $arr);
?>
