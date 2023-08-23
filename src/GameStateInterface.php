<?php

namespace App;

interface GameStateInterface
{
    public function handle(Player $player, Slot $slot): void;

}