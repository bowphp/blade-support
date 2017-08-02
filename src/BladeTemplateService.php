<?php

namespace Papac;

use Bow\View\View;
use Bow\Application\Configuration;
use Bow\Application\Services as BowService;

class BladeTemplateService extends BowService
{
    /**
     * Démarre le serivce
     */
    public function start()
    {
        View::singleton()->setEngine('blade');
    }

    /**
     * @param Configuration $config
     */
    public function make($config)
    {
        View::configure($config);
        $view = View::singleton();
        $view->pushEngine('blade', \Papac\Blade::class);
    }
}