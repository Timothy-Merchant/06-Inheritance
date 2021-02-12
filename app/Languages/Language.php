<?php

declare(strict_types=1);

namespace App\Languages;

abstract class Language
{
    protected $name;

    abstract function name(): string;
    abstract function hello(): string;
}
