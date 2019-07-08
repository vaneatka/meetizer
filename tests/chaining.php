<?php 
// inlantuire -> objects

class Box{
    public $value;
    public function __construct($value){
        $this->value = $value;
        
    }
    public function x10(){
        $this->value *=10;
        return $this;
    }
    public function x100(){
        $this->value *=100;
        return $this;
    }
    public function x1000(){
        $this->value *=1000;
        return $this;
    }
    public function print(){
        print "This Object's value is: {$this->value}"; // php format number 10.000.000
        return $this;
    }
}

$b = new Box(100);
// var_dump($b);
// $b->x10();
// $b->x100();
// $b->x1000();
// $b->print();
(new Box(100))
            ->x100()
            ->x10()
            ->x1000()
            ->print();

?>
