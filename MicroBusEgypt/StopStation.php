<?php

namespace Hakam\MicroBusEgypt;

class StopStation
{
    private int $stopId;
    private array $passengers;

    public function __construct(int $stopId)
    {
        $this->passengers = [];
        $this->stopId = $stopId;
    }

    public function getStopId(): int
    {
        return $this->stopId;
    }

    public function getPassengers(): array
    {
        return $this->passengers;
    }

    /**
     * @param Passenger $passenger
     */
    public function addPassenger(Passenger $passenger): void
    {
        $this->passengers[] = $passenger;
    }
}