<?php

declare(strict_types=1);

namespace App\Cutlery;

class Spoon
{
    protected $scoops;

    public function scoop()
    {
        $this->scoops += 1;
        return $this;
    }

    public function howManyScoops()
    {
        return $this->scoops;
    }
}
