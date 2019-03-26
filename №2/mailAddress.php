<?php
namespace classes;

require_once 'partsOfAddress.php';

class mailAddress implements \interfaces\partsOfAddress
{
    private $index;
    private $city;
    private $street;
    private $homeNumber1;
    private $homeNumber2;
    private $flatNumber;

        public function getIndex(){
            return $this->index;
        }
        public function getCity(){
            return $this->city;
        }
        public function getStreet(){
            return $this->street;
        }
        public function getHomeNumber1(){
           return $this->homeNumber1;
        }
        public function getHomeNumber2(){
           return $this->homeNumber2;
        }
        public function getFlatNumber(){
           return $this->flatNumber;
        }

            public function setIndex($index){
                $this->index = $index;
            }
            public function setCity($city){
                $this->city = $city;
            }
            public function setStreet($street){
                $this->street = $street;
            }
            public function setHomeNumber1($homeNumber1){
                $this->homeNumber1 = $homeNumber1;
            }
            public function setHomeNumber2($homeNumber2){
                $this->homeNumber2 = $homeNumber2;
            }
            public function setFlatNumber($flatNumber){
                $this->flatNumber = $flatNumber;
     
            }

     function __construct($index, $city, $street, $homeNumber1, $homeNumber2 = null, $flatNumber = null)
     {
        $this->index = $index;
        $this->city = $city;
        $this->street = $street;
        $this->homeNumber1 = $homeNumber1;
        $this->homeNumber2 = $homeNumber2;
        $this->flatNumber = $flatNumber;
     }

    function showAddress()
    {
        if(isset($this->homeNumber2))
        {
            if(isset($this->flatNumber))
            {
                echo $this->index.', '.$this->city.', '.$this->street.', '.$this->homeNumber1.' / '.$this->homeNumber2.', '.$this->flatNumber.'<br>';
            }
            else
            {
                echo $this->index.', '.$this->city.', '.$this->street.', '.$this->homeNumber1.' / '.$this->homeNumber2.'<br>';
            }
        }

        if(!isset($this->homeNumber2))
        {
            if(isset($this->flatNumber))
            {
                echo $this->index.', '.$this->city.', '.$this->street.', '.$this->homeNumber1.', '.$this->flatNumber.'<br>';
            }
            else
            {
                echo $this->index.', '.$this->city.', '.$this->street.', '.$this->homeNumber1.'<br>';
            }
        }
    }
    public static function getPartAddress(\classes\mailAddress $obj, $part = null)
    {
            if(isset($part))
            {
        
                switch ($part) {
                    case 'index':
                        echo $obj->index;
                        break;
                    case 'city':
                        echo $obj->city;
                        break;
                    case 'street':
                        echo $obj->street;
                        break;
                    case 'hn1':
                        echo $obj->homeNumber1;
                        break;
                    case 'hn2':
                        echo $obj->homeNumber2;
                        break;
                    case 'flat':
                        echo $obj->flatNumber;
                        break;
        
                     }
            }
            else
            {
                $obj->showAddress();
            }
    
    }
}