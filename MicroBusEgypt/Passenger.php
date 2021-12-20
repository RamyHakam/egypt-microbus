<?php

namespace Hakam\MicroBusEgypt;

class Passenger
{
    public int $id;
    public int $dropOffLocation;
    public int $moveCount;

    public function __construct(int $id ,int $dropOffLocation)
    {
        $this->id = $id;
        $this->dropOffLocation = $dropOffLocation;
        $this->moveCount = 0;
    }

    public function move(): void
    {
        ++$this->moveCount;
    }
}