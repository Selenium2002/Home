<?php 

class House {
    //public prop
    public $rooms;

    //protected prop
    protected $bc;

    //private prop
    private $area;

    public function bc_setter($type)
    {
        $this->bc = $type;
    } 
    public function bc_getter(): string
    {
        return $this->bc;
    }

}



echo "<h1>";


$house = new House();
//print the public prop without setter func and getter func

$house-> rooms = 5;
echo $house-> rooms. "<br>";
//set bc
$house->bc_setter("High level of luxury");

echo $house-> bc_getter();

echo "</h1>";


//test
echo "<h1>Hello world</h1>";

?>