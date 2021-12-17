<?php

namespace Hakam\MicroBusEgypt;


class MicroBusWithMinHeap extends BusWithMinHeap
{
    public function drive(): array
    {
        $this->moveToNextStop();
        while ($this->currentStop !== null) {

            while ($this->seats->isEmpty() === false && $this->seats->top()->dropOffLocation === $this->currentStop->station->getStopId()) {
                $passenger = $this->seats->extract();
                $this->passengerList [] = [$passenger->id,$passenger->moveCount];
            }

            $currentStopPassengers = $this->currentStop->station->getPassengers();
            while ($this->haveSeat() && empty($currentStopPassengers) === false) {
                $this->seats->insert(array_shift($currentStopPassengers));
            }
            $this->moveToNextStop();
        }
        return $this->passengerList;
    }
}