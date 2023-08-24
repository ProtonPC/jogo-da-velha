<?php

namespace App;
interface PlayerInterface {

    public function draw(AbstractSlot $slot);

    public function getIcon(): string;
}