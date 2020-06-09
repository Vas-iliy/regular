<?php

$str = 'Masha is       very beautiful';
$res1 = explode(' ', $str);

//то же самое что и в explode, только без лишних пробелов
/*$res2 = preg_split('/\s+/', $str);
foreach ($res2 as $res) {
    echo $res . "<br>";
}*/

/*$res3 = preg_match('/is/', $str);
echo $res3;*/

$res4 = preg_match('/[{\w]/', $str);
echo $res4;
?>

то же самое что и в explode, только без лишних пробелов
preg_split('/\s+/', $str)
preg_match('/[xz]/', $str)-вернет только первое вхождение
preg_match_all('/[xz]/', $str)-вернет все вхождения
[a-z]-диапазон
[a-zA-Z0-9]-ищем буквы и цифры
спецсимволы:
1) {\w - все буквы латинского алфовита, цифры и _
2) {\W - не являющиеся буквами, цифрами и _
3) \d - только цифры
4) \D - не цифры
5) \n - перенос строки
6) \s - символ разделителя ' ', \n, \r
7)
