<?php

declare(strict_types=1);

namespace Src\Fundamentals\WillThereBeEnoughSpace;

class WillThereBeEnoughSpace
{
    public function solution(int $capacity, int $embarkedPassengers, int $passengersWaiting): int
    {
        $wait = ($capacity - $embarkedPassengers) - $passengersWaiting;
        return $wait >= 0 ? 0 : $wait * -1 ;
    }
}
