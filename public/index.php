<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

$container = App\Bootstrap::boot()->createContainer();
$application = $container->getByType(Nette\Application\Application::class);
$application->run();
