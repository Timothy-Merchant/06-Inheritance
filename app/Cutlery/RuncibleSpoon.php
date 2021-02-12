<?php

declare(strict_types=1);

namespace App\Cutlery;

class RuncibleSpoon extends Spoon
{
    public function scoop()
    {
        $this->scoops += 2;
        return $this;
    }
}
