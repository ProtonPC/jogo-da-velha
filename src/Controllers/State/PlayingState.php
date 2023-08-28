<?php

namespace App\Controllers\State;

use App\Controllers\Player\AbstractPlayer;
use App\Controllers\Slot\AbstractSlot;
use App\Interfaces\PlayerStateInterface;

class PlayingState implements PlayerStateInterface
{
    private string $description;

    public function __construct()
    {
        $this->description = "Player active";
    }

    public function handle(AbstractPlayer $player, AbstractSlot $slot): void
    {
        $player->setState(new PlayingState());
    }

    public function getDescription(): string
    {
        return $this->description;
    }
}