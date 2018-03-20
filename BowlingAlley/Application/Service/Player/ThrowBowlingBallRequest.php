<?php

class ThrowBowlingBallRequest
{
    protected $playerId;
    protected $angle;
    protected $spin;
    protected $speed;

    public function __construct($playerId, $angle, $spin, $speed)
    {
        $this->playerId = $playerId;
        $this->angle = $angle;
        $this->spin = $spin;
        $this->speed = $speed;
    }

    public function getPlayerId()
    {
        return $this->playerId;
    }

    public function getAngle()
    {
        return $this->angle;
    }

    public function getSpin()
    {
        return $this->spin;
    }

    public function getSpeed()
    {
        return $this->speed;
    }
}
