<?php declare(strict_types=1);

namespace Template\Aviator;

/**
 * Class Bootstrap
 * @package Template\Aviator
 */
class Bootstrap extends \Template\Material\Bootstrap
{
    /**
     * @inheritdoc
     */
    public function boot(): void
    {
        parent::boot();
        // whatever you do, always call parent::boot() or delete this method!
    }

    protected function registerPlugins(): void
    {
        parent::registerPlugins();
        // whatever you do, always call parent::registerPlugins() or delete this method!
    }
}
