<?php

namespace App\Controllers;

use App\Controllers\Player\AbstractPlayer;
use App\Controllers\Player\ComputerPlayer;
use App\Controllers\Player\HumanPlayer;
use App\Controllers\Slot\NullSlot;
use App\Controllers\State\FinishedState;
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

        if (!isset($_SESSION['current_player'])) {
            $this->currentPlayer = 0;
            $_SESSION['current_player'] = $this->currentPlayer;
        }
        $this->currentPlayer = $_SESSION['current_player'];

        $this->players = [
            $humanPlayer,
            $computerPlayer
        ];
    }
    
    public function play(AbstractPlayer $player): void
    {
        if(isset($_REQUEST['reset']) && $_REQUEST['reset'] == 1)
        {
            $_SESSION = array();
        } else {
            $position = $_REQUEST['x'];
            if(!(!isset($_SESSION['slots'][$position]) && !empty($_SESSION['slots'][$position]))) {
                $this->slots[$position]?->setIcon($player?->getIcon());
                $_SESSION['slots'][$position] = $this->slots[$position]?->getIcon();
            }
        }

        if ($player->checkWinner())
        {
            $player->setState(new FinishedState());
            $_SESSION['winner'] = intval($this->players[$_SESSION['current_player']] instanceof HumanPlayer);
        }
    }
    
    public function changePlayer(): void
    {
        $this->currentPlayer = !$this->currentPlayer;
        $_SESSION['current_player'] = $this->currentPlayer;
    }

    public function getPlayer(): AbstractPlayer
    {
        return $this->players[$this->currentPlayer];
    }

    public function getSpecificPlayer(int $position): AbstractPlayer
    {
        return $this->players[$position];
    }
}
