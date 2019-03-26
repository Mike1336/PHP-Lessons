<!--                                               Практическая №1

                                            Базовая реализация принципов ООП

                                                     Вариант №4

Построить описание класса, содержащего информацию о почтовом адресе организации. 
Предусмотреть возможность раздельного изменения составных частей адреса, создания и уничтожения объектов этого класса. -->

<?php
require_once 'mailAddress.php';

$address1 = new mailAddress('344011','Rostov-on-Don', 'Pushkinskaya srt.', 32 , 12, 4);
$address2 = new mailAddress('344051','Moscow', 'Lenina srt.', 14);

$address1->showAddress();
$address2->showAddress();