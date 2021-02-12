<?php

declare(strict_types=1);

namespace App\Tricksy\Vehicles;

use App\Tricksy\Person;

class Boat extends Vehicle
{
    private $captain;

    public function setCaptain($captain): Boat
    {
        $this->captain = $captain;
        array_push($this->passengers, $captain);
        return $this;
    }
}
