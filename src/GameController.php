<?php

namespace App;

class GameController
{
    private GameState $state;
    private $slots = [];
    private PlayerInterface $player;

    public function __construct(ReadyState $gameState)
    {
        $this->state = $gameState;
    }
    
    public function changeState(GameState $newState): void
    {
        $this->state = $newState;
    }

    public function play(PlayerInterface $player, Slot $slot): void
    {
        //
    }

    public function checkWinner(): void
    {
        //
    }

    public function changePlayer(PlayerInterface $player): void
    {
        //
    }
}

