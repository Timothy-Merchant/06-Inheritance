<?php

declare(strict_types=1);

namespace App\Languages;

class French extends Language
{    
    public function name(): string
    {
        return $this->name = "French";
    }
    public function hello(): string
    {
        return "Bonjour";
    }
}
