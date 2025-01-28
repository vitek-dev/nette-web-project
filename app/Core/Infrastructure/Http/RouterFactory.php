<?php

declare(strict_types=1);

namespace App\Core\Infrastructure\Http;

use Nette\Application\Routers\RouteList;
use Nette\StaticClass;

class RouterFactory
{

    use StaticClass;

    public static function createRouter(): RouteList
    {
        $router = new RouteList();

        $router
            ->withModule('Api')
            ->addRoute('api/<module>/v1/<presenter>/<action=default>[/<id>]');

        $router
            ->withModule('Frontend')
            ->addRoute('<module=Core>/<presenter>/<action>[/<id>]', [
                'presenter' => 'Homepage',
                'action' => 'default',
            ]);
        return $router;
    }
}