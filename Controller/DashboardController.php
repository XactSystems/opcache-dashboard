<?php

namespace Xact\OPCacheDashboard\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractController
{
    /**
     * @Route("/opcache-dashboard", name="xact_opcache_dashboard")
     */
    function dashboard(): Response
    {
        return $this->render('@XactOPCacheDashboard/dashboard.html.twig', [
            'configuration' => opcache_get_configuration(),
            'status' => opcache_get_status(),
            'phpVersion' => phpversion(),
        ]);
    }
}
