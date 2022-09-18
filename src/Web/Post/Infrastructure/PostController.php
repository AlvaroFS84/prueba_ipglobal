<?php

namespace App\Web\Post\Infrastructure;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PostController
{
    #[Route('/posts', name: 'list_post')]
    public function getPost(): Response
    {
        return new Response(
            '<html><body>Post List</body></html>'
        );
    }
}