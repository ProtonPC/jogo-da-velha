<?php

namespace App;

class GameController
{
    private GameState $state;
    private $slots = [];
    private Player $player;

    public function __construct(ReadyState $gameState)
    {
        $this->state = $gameState;
    }
    
    public function changeState(GameState $newState): void
    {
        $this->state = $newState;
    }

    public function play(Player $player, Slot $slot): void
    {
        //
    }

    public function checkWinner(): void
    {
        //
    }

    public function changePlayer(Player $player): void
    {
        //
    }
}

