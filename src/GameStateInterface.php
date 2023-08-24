<?php

namespace App;

interface GameStateInterface
{
    public function handle(PlayerInterface $player, Slot $slot): void;

}