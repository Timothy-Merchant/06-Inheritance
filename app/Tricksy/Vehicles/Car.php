<?php

declare(strict_types=1);

namespace App\Tricksy\Vehicles;

use App\Tricksy\Person;

class Car extends Vehicle
{
    private $driver;

    public function setDriver(Person $driver): Car
    {
        $this->driver = $driver;
        array_push($this->passengers, $driver);
        return $this;
    }
}
