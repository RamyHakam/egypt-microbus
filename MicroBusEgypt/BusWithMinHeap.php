<?php

namespace Hakam\MicroBusEgypt;

abstract class BusWithMinHeap implements DriveInterface
{
    protected TrafficLine $trafficLine;
    protected ?TrafficNode $currentStop = null;
    protected ?CustomMinHeap $seats;
    protected array $passengerList = [];

    private const MAX_SEATS = 15;

    public function __construct(TrafficLine $trafficLine)
    {
        $this->seats = new CustomMinHeap();
        $this->trafficLine = $trafficLine;
        $this->currentStop = $this->trafficLine->getHead();
    }
    protected function moveToNextStop(): void
    {
        $this->currentStop = $this->currentStop->next;
    }

    protected function haveSeat(): bool
    {
        return $this->seats->isEmpty() || $this->seats->count() <=self::MAX_SEATS;
    }
}