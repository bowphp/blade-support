<?php

declare(strict_types=1);

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
        View::pushEngine('blade', BladeEngine::class);
    }

    /**
     * @inheritDoc
     */
    public function run(): void
    {
        //
    }
}
