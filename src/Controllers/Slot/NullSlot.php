<?php


namespace App\Controllers\Slot;

class NullSlot extends AbstractSlot
{
   public function __construct(int $x) 
    {
        $this->x = $x;
        $this->icon = "";
    }
}