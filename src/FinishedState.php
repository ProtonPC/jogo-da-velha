<?php

namespace App;

class FinishedState implements GameStateInterface
{
    private string $description;

    public function handle(PlayerInterface $player, Slot $slot): void
    {
        // fazer o que precisa ser feito
    }

    public function getDescription(): string
    {
        return $this->description;
    }
}