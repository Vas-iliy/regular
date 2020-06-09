<?php

$str = 'Masha is       very beautiful';
$res1 = explode(' ', $str);

//то же самое что и в explode, только без лишних пробелов
$res2 = preg_split('/\s+/', $str);
foreach ($res2 as $res) {
    echo $res . "<br>";
}

$res3 = preg_match('/is/', $str);
echo $res3;
