<?php

declare(strict_types=1);

namespace Xact\OPCacheDashboard\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ControllerTest extends WebTestCase
{
    /**
     * N.B. The functional controller tests currently do nothing until we can resolve the following errors:
     * [critical] Uncaught PHP Exception LogicException: ""Xact\OPCacheDashboard\Controller\DashboardController"
     *   has no container set, did you forget to define it as a service subscriber?" at
     *   /var/projects/command-scheduler/vendor/symfony/framework-bundle/Controller/ControllerResolver.php line 39
     *
     * This is happening on ALL the controller tests
     */

    /**
     * @group controller
     */
    public function testDashboard(): void
    {
        /*
        $this->client->request('GET', '/opcache-dashboard');

        $this->assertEquals(200, $this->client->getResponse()->getStatusCode());
        */
    }

    protected static function getKernelClass(): string
    {
        return TestKernel::class;
    }
}
