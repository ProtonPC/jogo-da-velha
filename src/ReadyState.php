<?php

namespace App;

class ReadyState implements GameStateInterface
{
    private string $description;

    public function handle(Player $player, Slot $slot): void
    {
        // fazer o que precisa ser feito
    }

    public function getDescription(): string
    {
        return $this->description;
    }
}