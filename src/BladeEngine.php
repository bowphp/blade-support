<?php

declare(strict_types=1);

namespace Bow\Blade;

use Bow\Configuration\Loader as Config;
use Bow\View\EngineAbstract;
use Jenssegers\Blade\Blade;

class BladeEngine extends EngineAbstract
{
    /**
     * The blade instance
     *
     * @var Blade
     */
    private Blade $engine;

    /**
     * The template name
     *
     * @var string
     */
    protected string $name = 'blade';

    /**
     * BladeEngine constructor.
     *
     * @param array $config
     * @return void
     */
    public function __construct(array $config)
    {
        $this->config = $config;

        $path = (array) realpath($config['path']);

        $this->engine = new Blade($path[0], $config['cache']);

        array_shift($path);

        foreach ($path as $key => $value) {
            $this->engine->addPath($value);
        }
    }

    /**
     * @inheritDoc
     */
    public function render($filename, array $data = []): string
    {
        $filename = $this->checkParseFile($filename, false);

        return $this->engine->render($filename, $data);
    }

    /**
     * @inheritDoc
     */
    public function getEngine(): Blade
    {
        return $this->engine;
    }
}
