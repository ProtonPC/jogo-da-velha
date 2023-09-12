<?php 

namespace App\Utils;

class CustomHelper{

    public static function isSlotEmpty(int $position){
        return !isset($_SESSION['slots'][$position]) && empty($_SESSION['slots'][$position]);
    }
}