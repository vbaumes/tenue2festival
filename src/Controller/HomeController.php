<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController
{
    /**
     * @Route("/", name="homepage")
     */
    public function number(): Response
    {
        return new Response(
            '<html><body>Hello World</body></html>'
        );
    }
}