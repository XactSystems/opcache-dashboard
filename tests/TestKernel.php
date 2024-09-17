<?php

declare(strict_types=1);

namespace Xact\CommandScheduler\Tests;

use Symfony\Bundle\FrameworkBundle\FrameworkBundle;
use Symfony\Bundle\FrameworkBundle\Kernel\MicroKernelTrait;
use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Routing\RouteCollectionBuilder;

class TestKernel extends Kernel
{
    use MicroKernelTrait;

    public function configureContainer(): void
    {
    }

    /**
     * @inheritDoc
     */
    public function registerBundles()
    {
        $bundles = [
            FrameworkBundle::class,
        ];

        foreach ($bundles as $class) {
            yield new $class();
        }
    }

    protected function configureRoutes(RouteCollectionBuilder $routes): void
    {
        $confDir = $this->getProjectDir() . '/Resources/config';
        $routes->import($confDir . '/routing.yaml');
    }
}
