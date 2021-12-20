<?php

namespace Hakam\MicroBusEgypt;


class TrafficLine
{
    private const NumberOfNodes = 100;
    public TrafficNode $head;
    private TrafficNode $line;

    public function __construct(array $stationsPassengers)
    {
        $this->line = $this->initTrafficLine();
        $this->head = new TrafficNode(null);
        $this->head->next = $this->line;
        foreach ($stationsPassengers as $key => $passengersList) {
            for($index = $this->line->station->getStopId() ; $index < $key ; $index++) {
                if($index !== 0)
                {
                    $this->line = $this->line->next;
                }
            }
            if ($this->line->station->getStopId() === $key) {
                foreach ($passengersList as $passenger) {
                    $this->line->station->addPassenger(new Passenger(...$passenger));
                }
            }
            $this->line = $this->line->next;
        }
    }

    private function initTrafficLine(): ?TrafficNode
    {
        $this->line = new TrafficNode(null);
        $startStation = $this->line;
        for ($index = 0; $index <= self::NumberOfNodes; $index++) {
            $station = new StopStation($index);
            $this->line->next = new TrafficNode($station);
            $this->line = $this->line->next;
        }
        return $startStation->next;
    }

    /**
     * @return TrafficNode
     */
    public function getHead(): TrafficNode
    {
        return $this->head;
    }
}