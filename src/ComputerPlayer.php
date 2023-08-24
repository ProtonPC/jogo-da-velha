<?php 

namespace App;

class ComputerPlayer implements PlayerInterface{

    private $icon;
    private $name;

    public function __construct(){
        $this->icon = 'O';
        $this->name = 'DANIEL';
    }

    public function draw(Slot $slot){
        //draw
    }

    public function getName(): string {
        return $this->name;
    }

    public function getIcon(): string {
        return $this->icon;
    }
}