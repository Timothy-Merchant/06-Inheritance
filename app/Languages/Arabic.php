<?php

declare(strict_types=1);

namespace App\Languages;

class Arabic extends Language
{
    public function name(): string
    {
        return $this->name = "Arabic";
    }
    public function hello(): string
    {
        return "مرحبا";
    }
}
