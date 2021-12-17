<?php

namespace Hakam\MicroBusEgypt;

use SplMinHeap;

class CustomMinHeap extends SplMinHeap
{
    public function compare($a, $b): int
    {
        if($a->dropOffLocation === $b->dropOffLocation)
        {
            return 0;
        }
        $noMove = $a->dropOffLocation < $b->dropOffLocation;

        if($noMove === false)
        {
            $a->move();
            $b->move();
        }

        return $noMove ? 1 : -1;
    }
}