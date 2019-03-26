<!--                                               Практическая №2

                                                 Наследование в PHP.

                                                     Вариант №4

                        Реализовать интерфейс в пространстве имён, в котором присутствуют методы, 
                        позволяющие из полученного объекста адреса вывести только нужную часть по параметру. -->

<?php
require_once 'mailAddress.php';
require_once 'partsOfAddress.php';


$address1 = new \classes\mailAddress('344011','Rostov-on-Don', 'Pushkinskaya srt.', 32 , 12, 4);
$address2 = new \classes\mailAddress('344051','Moscow', 'Lenina srt.', 14);

// $address1->showAddress();
// $address2->showAddress();

\classes\mailAddress::getPartAddress($address2,'city'); 