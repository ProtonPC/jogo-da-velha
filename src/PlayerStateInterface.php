<?php

namespace App;

interface PlayerStateInterface
{
    public function handle(AbstractPlayer $player, AbstractSlot $slot): void;

}