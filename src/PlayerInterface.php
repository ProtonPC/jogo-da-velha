<?php

namespace App;
interface PlayerInterface {

    public function draw(Slot $slot);

    public function getIcon(): string;
}