<?php
$age = 2;
if($age > 18 && $age <= 59) {
    echo "Вам еще работать и работать"."<br>";
}
if($age > 59) {
    echo "Вам пора на пенсию" . "<br>";
}
elseif($age > 1 && $age <= 17) {
    echo "Вам еще рано работать","<br>";
}
else {
    echo "Неизвестный возраст"."<br>";
}