<?php

namespace App\Controllers\State;

use App\Controllers\Player\AbstractPlayer;
use App\Interfaces\PlayerStateInterface;

class ReadyState implements PlayerStateInterface
{
    private string $description;

    public function __construct()
    {
        $this->description = "Player ready";
    }

    public function handle(AbstractPlayer $player): void
    {
        $player->setState(new ReadyState());
    }

    public function getDescription(): string
    {
        return $this->description;
    }
}