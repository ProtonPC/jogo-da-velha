<?php


namespace App;

class RealSlot extends AbstractSlot {
    private int $x;
    private string $icon;

    public function __construct($x){
        $this->x = $x;
        $this->icon = "";
    }

    public function isEmpty() : bool{
        return !empty($this->icon);
    }

    public function setIcon() : void{
        
    }

}