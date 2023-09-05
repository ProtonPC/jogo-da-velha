<?php

namespace App\Controllers\State;

use App\Controllers\Player\AbstractPlayer;
use App\Interfaces\PlayerStateInterface;

class PlayingState implements PlayerStateInterface
{
    private string $description;

    public function __construct()
    {
        $this->description = "Player active";
    }

    public function handle(AbstractPlayer $player): void
    {
        $player->setState(new PlayingState());
    }

    public function getDescription(): string
    {
        return $this->description;
    }
}