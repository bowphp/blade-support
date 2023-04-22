<?php

namespace Bow\Blade;

use Bow\View\View;
use Bow\Configuration\Loader as Config;
use Bow\Configuration\Configuration;

class BladeEngineConfiguration extends Configuration
{
    /**
     * @inheritDoc
     */
    public function create(Config $config): void
    {
        $this->container->bind('view', function () use ($config) {
            View::pushEngine('blade', BladeEngine::class);
            View::configure($config);

            return View::getInstance();
        });
    }

    /**
     * @inheritDoc
     */
    public function run(): void
    {
        $this->container->make('view');
    }
}
