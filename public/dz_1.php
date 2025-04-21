<?php
header("Content-Type: text/html; charset=utf-8");
echo "hello world";
$firstname = "владислав";
$lastname = "кочетов";
$middlename = "андреевич";

//up 

$lastname = mb_convert_case($lastname, MB_CASE_TITLE, "UTF-8");
//первая буква имени и отч, делает заглавными
$firstInitial = mb_strtoupper(mb_substr($firstname, 0, 1));
$middleInitial = mb_strtoupper(mb_substr($middlename, 0, 1));

//склейка
$result = $lastname . " " . $firstInitial . "." . $middleInitial . ".";

//результат
echo "<br>" . $result;
echo "<br>";

echo "<br>";
echo "<br>";


//
//
//


//месяцы с 1 по 12
for ($month = 1; $month <= 12; $month++) {
    //числа с 1 по 20
    for ($day = 1; $day <= 20; $day++) {
        // дата
        $dateStr = sprintf('2021-%02d-%02d', $month, $day);

        //день недели (6 — это суббота)
        $dayOfWeek = date('w', strtotime($dateStr));

        if ($dayOfWeek == 6) {
            //выводим субботу
            echo date('d.m.Y', strtotime($dateStr)) . "<br>";
        }
    }
}
?>