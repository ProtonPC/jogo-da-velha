<?php

namespace App;

interface PlayerStateInterface
{
    public function handle(PlayerInterface $player, Slot $slot): void;

}