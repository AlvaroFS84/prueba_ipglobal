<?php

namespace App\Web\Author\Infrastructure;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AutorController
{
    #[Route('/author', name: 'author_detail', methods: ['GET'])]
    public function getAuthor(): Response
    {
        return new Response(
            '<html><body>Author detail</body></html>'
        );
    }
}