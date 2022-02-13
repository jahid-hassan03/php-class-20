<?php

namespace App\classes;
use App\classes\User;
use App\classes\ExampleOne;
use App\classes\ExampleTow;
use App\classes\Teacher;
use App\classes\Category;

class Student extends Teacher implements ExampleOne, ExampleTow
{
    use Category;
    protected $country ='bangladesh';
    public static $area = 'Farmgate';


    public function __construct()
    {
//        $this->name ='BITM';
//        $this->city;
    }
    public function manage()
    {
//        echo self::$area;
          echo self::$area;

//        echo "institute name is $this->name and city is $this->city and country is $this->country";
    }

    public function one()
    {
        echo 'hello one';
    }

    public function two()
    {
        echo 'hello two';
    }

    public function three()
    {
        echo 'hello three';
    }

    public function ten()
    {
        echo 'ten';
    }

    public function ten1()
    {
        echo 'ten one';
    }

    public function test()
    {
        echo 'hello text';
    }
    public static function demo()
    {
        echo 'hello world';
    }

}