<?php

class Car {
    private $make;
    private $model;
    private $year;

    public function __construct($make, $model, $year) {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }

    public function get_make() {
        return $this->make;
    }

    public function get_model() {
        return $this->model;
    }

    public function get_year() {
        return $this->year;
    }

    public function set_make($make) {
        $this->make = $make;
    }

    public function set_model($model) {
        $this->model = $model;
    }

    public function set_year($year) {
        $this->year = $year;
    }

    public function display_info() {
        echo "Make: " . $this->make . "\n";
        echo "Model: " . $this->model . "\n";
        echo "Year: " . $this->year . "\n";
    }
}


$car = new Car("Toyota", "Corolla", 2015);


echo "\n";
$car->display_info();


$car->set_make("Honda");
$car->set_model("Civic");


echo "\n";
$car->display_info();
