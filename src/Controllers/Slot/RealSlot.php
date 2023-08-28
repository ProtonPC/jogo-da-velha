<?php


namespace App\Controllers\Slot;

class RealSlot extends AbstractSlot
{
    public function __construct(int $x) 
    {
        $this->x = $x;
        $this->icon = "";
    }
}