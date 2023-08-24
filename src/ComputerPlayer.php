<?php 

namespace App;

class ComputerPlayer implements PlayerInterface{

    private string $icon;
    private string $name;

    public function __construct(){
        $this->icon = 'O';
        $this->name = 'DANIEL';
    }

    public function draw(AbstractSlot $slot){
        $slot->setIcon($this->icon);
    }

    public function getName(): string {
        return $this->name;
    }

    public function getIcon(): string {
        return $this->icon;
    }
}