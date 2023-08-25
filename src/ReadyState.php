<?php

namespace App;

class ReadyState implements PlayerStateInterface
{
    private string $description;

    public function __construct()
    {
        $this->description = "Player ready";
    }

    public function handle(AbstractPlayer $player, AbstractSlot $slot): void
    {
        $player->setState(new ReadyState());
        
    }

    public function getDescription(): string
    {
        return $this->description;
    }
}