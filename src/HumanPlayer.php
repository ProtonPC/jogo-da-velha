<?php

namespace App;

class HumanPlayer implements PlayerInterface{

    private string $name;
    private string $icon;

    public function __construct(string $name){
        $this->name = $name;
        $this->icon = "X";
    }
    public function draw(AbstractSlot $slot){
        $slot->setIcon($this->icon);
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