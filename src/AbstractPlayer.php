<?php

namespace App;

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

    protected function __construct(string $name)
    {
        $this->name = $name;
        $this->icon = "X";
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

    public function checkWinner($slots): void
    {
        // implementação bem louca;
    }
}