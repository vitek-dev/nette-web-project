<?php

declare(strict_types=1);

namespace App\Core\Infrastructure\Http\Frontend;

use Nette\Application\UI\Presenter;

class HomepagePresenter extends Presenter
{
    public function renderDefault(): void
    {
        $this->template->time = time();
    }
}