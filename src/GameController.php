<?php

namespace App;

class GameController
{
    private AbstractSlot $slot;
    private AbstractPlayer $player;

    public function __construct(AbstractPlayer $player, AbstractSlot $slot)
    {
            //
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

