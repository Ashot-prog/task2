<?php
abstract class Cars{
    public $color;
    public $maxSpeed;
    public $transmission;
    public $date;
    public $model;

    function color(){
        echo $this->color.' ';
    }
    function maxSpeed(){
        echo $this->maxSpeed.' ';
    }
    function transmission(){
        echo $this->transmission.' ';
    }
    function date(){
        echo $this->date.' ';
    }
    function model(){
        echo $this->model.'<br>';
    }
}

class Bmw extends Cars {
    function __construct(){
        $this->color = 'Red';
        $this->maxSpeed='190km/h';
        $this->transmission='Automatic';
        $this->date='2015';
        $this->model='M5';

    }
}
class Mercedes extends Cars {
    function __construct(){
        $this->color = 'Black';
        $this->maxSpeed='280km/h';
        $this->transmission='Automatic';
        $this->date='2020';
        $this->model='W222';

    }
}
class Toyota extends Cars {
    function __construct(){
        $this->color = 'White';
        $this->maxSpeed='350km/h';
        $this->transmission='Manual';
        $this->date='2003';
        $this->model='Supra';

    }
}
$brand = new Bmw();
echo $brand->color();
echo $brand->maxSpeed();
echo $brand->transmission();
echo $brand->date();
echo $brand->model();

$brand = new Mercedes();
echo $brand->color();
echo $brand->maxSpeed();
echo $brand->transmission();
echo $brand->date();
echo $brand->model();

$brand = new Toyota();
echo $brand->color();
echo $brand->maxSpeed();
echo $brand->transmission();
echo $brand->date();
echo $brand->model();

?>