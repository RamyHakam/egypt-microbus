<?php

namespace Hakam\MicroBusEgypt;


class TrafficNode
{
    public ?StopStation $station = null;
    public ?TrafficNode $next = null;

    /**
     * @param ?StopStation $station
     * @param null $next
     */
    public function __construct(?StopStation $station, $next = null)
    {
        $this->station = $station;
        $this->next = $next;
    }
}