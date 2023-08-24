<?php


namespace App;

class RealSlot extends AbstractSlot {
    private int $x;
    private string $icon;

    public function __construct(int $x){
        $this->x = $x;
        $this->icon = "";
    }

    public function isEmpty(): bool{
        return !empty($this->icon);
    }

    public function setIcon(string $icon): void{
        $this->icon = $icon;
    }

    public function getX(): string{
        return $this->x;
    }

}