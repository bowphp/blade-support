<?php

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
    protected $name = 'blade';

    /**
     * BladeEngine constructor.
     *
     * @param Config $config
     * @return void
     */
    public function __construct(Config $config)
    {
        $this->config = $config;

        $path = (array) realpath($config['view.path']);

        $this->engine = new Blade($path[0], $config['view.cache']);

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
