<?php

declare(strict_types=1);

namespace App\Tricksy\Vehicles;

use App\Tricksy\Person;

abstract class Vehicle
{
    protected $passengers = [];

    public function setPassengers(array $people): void
    {
        $this->passengers = array_merge($this->passengers, $people);
    }

    public function listOccupants()
    {
        return $this->passengers;
    }
}
