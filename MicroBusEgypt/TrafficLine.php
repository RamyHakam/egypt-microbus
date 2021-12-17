<?php

namespace Hakam\MicroBusEgypt;


class TrafficLine
{
    public TrafficNode $head;
    private TrafficNode $line;

    public function __construct(array $stationsPassengers)
    {
        $startStation = new StopStation(0);

        foreach ($stationsPassengers[0] as $passenger) {
            $startStation->addPassenger(new Passenger( ...$passenger));
        }
        unset($stationsPassengers[0]);
        $this->line = new TrafficNode($startStation);
        $this->head =  new TrafficNode(null);
        $this->head->next = $this->line;
        foreach ($stationsPassengers as $passengers) {
            $station = new StopStation($this->line->station->getStopId() + 1);
            foreach ($passengers as $passenger) {
                $station->addPassenger(new Passenger(...$passenger));
            }
            $this->line->next = new TrafficNode($station);
            $this->line = $this->line->next;
        }

        for($index = $this->line->station->getStopId() + 1 ; $index<=100;$index++)
        {
            $station = new StopStation($index);
            $this->line->next = new TrafficNode($station);
            $this->line = $this->line->next;
        }
    }

    /**
     * @return TrafficNode
     */
    public function getHead(): TrafficNode
    {
        return $this->head;
    }
}