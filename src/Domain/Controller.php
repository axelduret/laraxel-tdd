<?php

declare(strict_types=1);

namespace Domain;

class Controller
{
    public function __invoke(): string
    {
        return 'Welcome to Laraxel-tdd';
    }
}
