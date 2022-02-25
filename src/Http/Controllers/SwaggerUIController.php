<?php

namespace Ornikar\SwaggerUi\Http\Controllers;

use Symfony\Component\HttpFoundation\Response;

class SwaggerUIController
{
    public function __construct(private string $openApiFilePath)
    {
    }

    final public function getApiDocJson() : Response
    {
        return new Response(
            file_get_contents($this->openApiFilePath),
            Response::HTTP_OK,
            [
                'content-type' => 'application/json',
            ]
        );
    }

    final public function viewSwagger() : Response
    {
        $html = __DIR__ . '/../../../resources/views/index.php.stub';

        return new Response(file_get_contents($html), Response::HTTP_OK, ['content-type' => 'text/html']);
    }
}
