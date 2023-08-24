<?php

namespace App;

class HumanPlayer implements PlayerInterface{

    private string $name;
    private string $icon;

    public function __construct(String $name){
        $this->name = $name;
        $this->icon = "X";
    }
    public function draw(Slot $slot){
        //Draw
    }

    public function getIcon(): string{
        return $this->icon;
    }

    public function setName(string $name){
        $this->name = $name;
    }

    public function getName(): string{
        return $this->name;
    }

}