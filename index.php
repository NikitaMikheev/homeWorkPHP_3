<?php
// Задача 1.

/* $name = "Павел";
$surname = "Иванов";
$second_name = "Валерьевич";
$dot = ".";

echo $surname ." " .mb_substr($name, 0, 1) .$dot .mb_substr($second_name, 0, 1) .$dot; */

// Задача 2.

/* $password = "123";

if(mb_strlen($password)<8) {
	echo "Слишком короткий пароль!";
}

else {
	echo "Длина пароля достаточная!";
} */

// Задача 3.

/* $firstString = "a2s";
$secondString = "asc";

if(mb_strlen($firstString)==mb_strlen($secondString)) {
	echo "Длина двух строк совпадает!";
}

else {
	echo "Строки имеют разную длину!";
} */

// Задача 4.

$text = "Hello World You can.";
$str = "";

if(mb_strlen($text)>100) {
	$str = mb_substr($text, 0, 50);
	echo $str ." <a href=#> Подробнее</a>";
}

else {
	echo $text;
}

// Задача 5.

$word = 'Неликвидность';

if(mb_strlen($word)>8) {
	echo mb_substr($word, 0, 4) ."-" .mb_substr($word, mb_strlen($word)-2);
}

else {
	echo $word;
}

// Задача 6.

$word = 'Неликвидность критической массы';
$char = 'и';

echo mb_substr_count($word, $char);

// Задача 7.

$pass = "as dwqs";

if(mb_strpos($pass, " "))  {
	echo "Пароль не должен содержать символов пробел!";
}

else {
	echo "Пароль впорядке!";
}

// Задача 8. 

$password = "123QWE";
$true_password = "123qwe";

if($password == $true_password) {
	echo "Добро пожаловать!";
}

elseif(mb_convert_case($password, MB_CASE_LOWER) == $true_password) {
	echo "Возможно нажата клавиша CAPSLOCK...";
}

else {
	echo "Отказано в доступе!";
}

// Задача 9.

$string = "You can test and compare your PHP code on 400+ PHP versions with this online editor. Yy";
$char = 'y';

echo mb_substr_count(mb_convert_case($string, MB_CASE_LOWER), $char);

// Задача 10.

$text = "Дана строка пароля, проверить совпадает ли она со строкой. В случае если совпадает, вывести, если пароль введен в верхнем регистре, то выводить. Если";
$word = "если";


echo str_ireplace($word, "<i>$word</i>", $text);

// Задача 11.

$tag = "<p>";
$close_tag = "</p>";

$text = "Вот тут будет тег <p>Здарова</p>, вот так"; 
$pos = mb_strpos($text, $close_tag)-mb_strpos($text, $tag)+4;

$get_text = mb_substr($text, mb_strpos($text, $tag), $pos);

$get_text = str_replace($tag,"",$get_text);

echo str_replace($close_tag,"",$get_text);

?>