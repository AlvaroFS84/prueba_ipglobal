<?php

namespace App\Api\Post\Infrastructure;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/api')]
class ApiController
{
    #[Route('/posts', name: 'api_list_post', methods: ['GET'])]
    public function getPosts(): Response
    {
        return new Response(
            '<html><body>api</body></html>'
        );
    }
}