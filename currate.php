<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 03.04.2017
 * Time: 20:53
 */

$date = date("d/m/Y"); // Сегодняшняя дата в необходимом формате
$link = "https://bank.gov.ua/NBUStatService/v1/statdirectory/exchange"; // Ссылка на XML-файл с курсами валют
$content = file_get_contents($link); // Скачиваем содержимое страницы
$dom = new domDocument("1.0", "cp1251"); // Создаём DOM
$dom->loadXML($content); // Загружаем в DOM XML-документ
$root = $dom->documentElement; // Берём корневой элемент
$childs = $root->childNodes; // Получаем список дочерних элементов
$data = array(); // Набор данных
for ($i = 0; $i < $childs->length; $i++) {
    $childs_new = $childs->item($i)->childNodes; // Берём дочерние узлы
    for ($j = 0; $j < $childs_new->length; $j++) {
        /* Ищем интересующие нас валюты */
        $el = $childs_new->item($j);
        $code = $el->nodeValue;
        if (($code == "USD") || ($code == "EUR") || ($code == "RUB")|| ($code == "PLN")) $data[] = $childs_new; // Добавляем необходимые валюты в массив
        if ($code == "USD") $usdel = $childs_new;
        if ($code == "EUR") $eurel = $childs_new;
        if ($code == "RUB") $rubel = $childs_new;
        if ($code == "PLN") $zlotel = $childs_new;

    }
}
/* Перебор массива с данными о валютах */
for ($i = 0; $i < count($data); $i++) {
    $list = $data[$i];
    for ($j = 0; $j < $list->length; $j++) {
        $el = $list->item($j);
        /* Выводим курсы валют */
        if ($el->nodeName == "txt")  $text = $el->nodeValue;
        elseif ($el->nodeName == "rate") $rate = round($el->nodeValue, 2);
    }
}
for ($j = 0; $j < $usdel->length; $j++) {
    $el = $usdel->item($j);
    /* Выводим курсы валют */
    if ($el->nodeName == "txt") $usdname = $el->nodeValue;

    elseif ($el->nodeName == "rate") $usdval =  round($el->nodeValue, 2);
}
for ($j = 0; $j < $eurel->length; $j++) {
    $el = $eurel->item($j);
    /* Выводим курсы валют */
    if ($el->nodeName == "txt") $eurname = $el->nodeValue;

    elseif ($el->nodeName == "rate") $eurval =  round($el->nodeValue, 2);
}
for ($j = 0; $j < $rubel->length; $j++) {
    $el = $rubel->item($j);
    /* Выводим курсы валют */
    if ($el->nodeName == "txt") $rubname = $el->nodeValue;

    elseif ($el->nodeName == "rate") $rubval =  round($el->nodeValue, 2);
}
for ($j = 0; $j < $zlotel->length; $j++) {
    $el = $zlotel->item($j);
    /* Выводим курсы валют */
    if ($el->nodeName == "txt") $zlotname = $el->nodeValue;

    elseif ($el->nodeName == "rate") $zlotval =  round($el->nodeValue, 2);
}

//echo $usdname . " - " . $usdval ."<br />";
//echo $eurname . " - " . $eurval ."<br />";
//echo $rubname . " - " . $rubval ."<br />";
//echo $zlotname . " - " . $zlotval ."<br />";

?>