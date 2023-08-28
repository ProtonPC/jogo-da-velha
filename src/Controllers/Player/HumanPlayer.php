<?php

namespace App\Controllers\Player;

use App\Controllers\Slot\AbstractSlot;

class HumanPlayer extends AbstractPlayer
{

    public function __construct(string $name)
    {
        $this->name = $name;
        $this->icon = "X";
    }
    public function draw(AbstractSlot $slot){
        $slot->setIcon($this->icon);
    }

    public function setName(string $name){
        $this->name = $name;
    }
}