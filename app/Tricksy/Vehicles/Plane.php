<?php

declare(strict_types=1);

namespace App\Tricksy\Vehicles;

use App\Tricksy\Person;

class Plane extends Vehicle
{
    private $pilot;
    private $coPilot;
    private $stewards;

    public function setPilot(Person $pilot): Plane
    {
        $this->pilot = $pilot;
        array_push($this->passengers, $pilot);
        return $this;
    }

    public function setCopilot(Person $coPilot): Plane
    {
        unset($this->passengers[1]);
        $this->passengers[1] = $coPilot;
        return $this;
    }

    public function setStewards(array $stewards): Plane
    {
        $this->stewards = $stewards;
        $this->setPassengers($stewards);
        return $this;
    }
}
