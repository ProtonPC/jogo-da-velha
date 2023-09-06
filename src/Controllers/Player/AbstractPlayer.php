<?php

namespace App\Controllers\Player;

use App\Controllers\Slot\AbstractSlot;
use App\Interfaces\PlayerStateInterface;
use App\Utils\Constants;

abstract class AbstractPlayer
{
    protected string $icon;
    protected string $name;
    protected PlayerStateInterface $state;
    protected bool $isWinner;

    public abstract function draw(AbstractSlot $slot);
    
    public function getState(): PlayerStateInterface
    {
        return $this->state;
    }

    public function setState(PlayerStateInterface $playerState): void
    {
        $this->state = $playerState;
    }

    public function getIcon(): string
    {
        return $this->icon;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getIsWinner(): bool
    {
        return $this->isWinner;
    }

    public function checkWinner(): bool
    {
        foreach(Constants::POSSIBLE_WINS() as $possibility)
        {
            if(
                isset($_SESSION['slots'][$possibility[0]])
                && isset($_SESSION['slots'][$possibility[1]])
                && isset($_SESSION['slots'][$possibility[2]])
            ) {
                if ($_SESSION['slots'][$possibility[0]] === $this->icon
                    && $_SESSION['slots'][$possibility[1]] === $this->icon
                    && $_SESSION['slots'][$possibility[2]] === $this->icon)
                {
                    $this->isWinner = true;
                    return true;
                }
            } 
        }
        $this->isWinner = false;
        return false;
    }

    public function isDraw(int $qtdSlots) 
    {
        if(isset($_SESSION['slots']))
            return (count($_SESSION['slots']) == $qtdSlots) && !$this->isWinner;
    
        return false;
    }
}