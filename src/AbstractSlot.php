<?php

namespace App;

abstract class AbstractSlot {
    protected int $x;
    protected string $icon;

    public function isEmpty(): bool
    {
        return !empty($this->icon);
    }
   
    public function setIcon(string $icon): void
    {
        $this->icon = $icon;
    }

    public function getX(): string
    {
        return $this->x;
    }
}