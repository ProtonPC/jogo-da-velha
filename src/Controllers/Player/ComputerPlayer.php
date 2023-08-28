<?php 

namespace App\Controllers\Player;

use App\Controllers\Slot\AbstractSlot;

class ComputerPlayer extends AbstractPlayer
{
    public function __construct(){
        $this->icon = 'O';
        $this->name = 'DANIEL';
    }

    public function draw(AbstractSlot $slot){
        $slot->setIcon($this->icon);
    }
}