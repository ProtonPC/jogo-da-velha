<?php

namespace App\Interfaces;

use App\Controllers\Player\AbstractPlayer;

interface PlayerStateInterface
{
    public function handle(AbstractPlayer $player): void;
}