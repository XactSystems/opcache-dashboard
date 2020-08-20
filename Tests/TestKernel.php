<?php

namespace Xact\CommandScheduler\Tests;

use Symfony\Bundle\FrameworkBundle\Kernel\MicroKernelTrait;
use Symfony\Component\Config\Loader\LoaderInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Routing\RouteCollectionBuilder;

class TestKernel extends Kernel
{
    use MicroKernelTrait;

    /**
     * @inheritDoc
     */
    public function registerBundles()
    {
        $bundles = [
            \Symfony\Bundle\FrameworkBundle\FrameworkBundle::class,
        ];

        foreach ($bundles as $class) {
            yield new $class();
        }
    }

    protected function configureRoutes(RouteCollectionBuilder $routes)
    {
        $confDir = $this->getProjectDir().'/Resources/config';
        $routes->import($confDir.'/routing.yaml');
    }
}

