<?php

namespace Hakam\MicroBusEgypt;

interface ActionsInterface
{
    public function pickupPassengers(array $passengers) :void;
    public function dropOffPassengers(array $passengers) :void;
}