<?php

namespace App\Interfaces;

use App\Controllers\Player\AbstractPlayer;
use App\Controllers\Slot\AbstractSlot;

interface PlayerStateInterface
{
    public function handle(AbstractPlayer $player, AbstractSlot $slot): void;

}