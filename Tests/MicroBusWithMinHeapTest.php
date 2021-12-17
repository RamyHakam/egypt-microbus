<?php

namespace Hakam\MicroBusEgypt\Tests;

use Hakam\MicroBusEgypt\MicroBusWithMinHeap;
use Hakam\MicroBusEgypt\TrafficLine;
use Hakam\MicroBusEgypt\Tests\Helper\MainTest;
/**
 * @covers \Hakam\MicroBusEgypt\MicroBusWithMinHeap
 */
class MicroBusWithMinHeapTest extends MainTest
{
    /**
     * @dataProvider provideData
     */
    public function testWithDataList($expectedResult, $inputData): void
    {
        $trafficLine = new TrafficLine($inputData);
        $microBus = new MicroBusWithMinHeap($trafficLine);
        $passengersMoves = $microBus->drive();
        self::assertEmpty(array_diff(...$expectedResult, ...$passengersMoves));
    }
}