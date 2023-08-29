<?php

namespace App\Controllers;

use App\Controllers\Player\AbstractPlayer;
use App\Controllers\Player\ComputerPlayer;
use App\Controllers\Player\HumanPlayer;
use App\Controllers\Slot\AbstractSlot;
use App\Controllers\Slot\NullSlot;
use App\Controllers\State\ReadyState;

class GameController
{
    public $slots;
    private $players;
    private bool $currentPlayer;

    public function __construct()
    {
        for($i = 0; $i < 9; $i++) {
            $this->slots[$i] = new NullSlot($i);
        }
        
        $computerPlayer = new ComputerPlayer();
        $computerPlayer->setState(new ReadyState());

        $humanPlayer = new HumanPlayer("Oponente do Daniel");
        $humanPlayer->setState(new ReadyState());

        $this->currentPlayer = 0;

        $this->players = [
            $humanPlayer,
            $computerPlayer
        ];
    }
    
    public function play(AbstractPlayer $player, AbstractSlot $slot): void
    {
    }
    
    public function changePlayer(): void
    {
        $this->currentPlayer = !$this->currentPlayer;
    }

    public function getPlayer(): AbstractPlayer
    {
        return $this->players[$this->currentPlayer];
    }
}
