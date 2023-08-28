<?php

namespace App\Controllers;

use App\Controllers\Player\AbstractPlayer;
use App\Controllers\Slot\AbstractSlot;

class GameController
{
    private AbstractSlot $slot;
    private AbstractPlayer $player;

    public function __construct(AbstractPlayer $player, AbstractSlot $slot)
    {
        var_dump($player, $slot);
        die();
    }
    
    public function play(AbstractPlayer $player, AbstractSlot $slot): void
    {
        //
    }

    public function changePlayer(AbstractPlayer $player): void
    {
        //
    }
}

