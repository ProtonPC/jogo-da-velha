<?php

namespace App;

abstract class AbstractSlot {
    private int $x;
    private string $icon;

    public abstract function isEmpty() : bool;

    public abstract function setIcon() : void;
}