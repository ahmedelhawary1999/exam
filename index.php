<?php
class dragonball {
    private $ballcount;
    public function __construct(){
        $this->ballcount=0;
    }
}
public function ifoundaball(){
    repeat_fun(20, ifoundaball);
    $this->ballcount++;
    if($this->ballcount===7){
        echo "you can ask for your wish.";
        $this->ballcount=0;
    }
}?>