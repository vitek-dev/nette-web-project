<?php

declare(strict_types=1);

namespace App\Core\Infrastructure\Http\Api;

use VitekDev\Nette\Application\ApiController;

final readonly class TimeController extends ApiController
{
    public function getNow(): int
    {
        return time();
    }
}