<?php

namespace App;

class FinishedState implements PlayerStateInterface
{
    private string $description;

    public function handle(PlayerInterface $player, AbstractSlot $slot): void
    {
        // fazer o que precisa ser feito
    }

    public function getDescription(): string
    {
        return $this->description;
    }
}