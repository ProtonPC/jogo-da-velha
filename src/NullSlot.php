<?php


namespace App;

class NullSlot extends AbstractSlot {
    private int $x;
    private string $icon;

    public function isEmpty() : bool{
        return !empty($this->icon);
    }

    public function setIcon() : void{
        
    }

}