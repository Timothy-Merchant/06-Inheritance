<?php

declare(strict_types=1);

namespace App\Languages;

class English extends Language
{
    public function name(): string
    {
        return $this->name = "English";
    }
    public function hello(): string
    {
        return "Hello";
    }
}
