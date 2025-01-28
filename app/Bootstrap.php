<?php

declare(strict_types=1);

namespace App;

use Nette\Bootstrap\Configurator;

class Bootstrap
{
    public static function boot(): Configurator
    {
        $configurator = new Configurator();

        $projectRoot = dirname(__DIR__);
        $configurator->addStaticParameters(['projectRoot' => $projectRoot]);

        $configurator->setDebugMode(getenv('APP_DEBUG') === 'true');

        $configurator->enableTracy($projectRoot . '/var/log');
        $configurator->setTempDirectory($projectRoot . '/var/temp');

        $configurator->addConfig($projectRoot . '/config/common.neon');
        $configurator->addConfig($projectRoot . '/config/local.neon');

        return $configurator;
    }
}
