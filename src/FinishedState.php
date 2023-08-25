<?php

namespace App;

class FinishedState implements PlayerStateInterface
{
    private string $description;

    public function __construct()
    {
        $this->description = "Finish him";
    }
    
    public function handle(AbstractPlayer $player, AbstractSlot $slot): void
    {
        $player->setState(new FinishedState());
    }

    public function getDescription(): string
    {
        return $this->description;
    }
}