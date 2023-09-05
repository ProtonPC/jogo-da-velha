<?php

namespace App\Controllers\State;

use App\Controllers\Player\AbstractPlayer;
use App\Interfaces\PlayerStateInterface;

class FinishedState implements PlayerStateInterface
{
    private string $description;

    public function __construct()
    {
        $this->description = "Finish him";
    }
    
    public function handle(AbstractPlayer $player): void
    {
        $player->setState(new FinishedState());
    }

    public function getDescription(): string
    {
        return $this->description;
    }
}