<?php

namespace Ornikar\SwaggerUi\Http\Controllers;

use Symfony\Component\HttpFoundation\Response;

class SwaggerUIController
{
    public function __construct(private string $openApiFilePath)
    {
    }

    public function getApiDocJson(): Response
    {
        /*$json = base_path() . DIRECTORY_SEPARATOR . config('l5-swagger.defaults.paths.docs')
            . DIRECTORY_SEPARATOR . config('l5-swagger.documentations.default.paths.docs_json');*/
        return new Response(file_get_contents($this->openApiFilePath), Response::HTTP_OK, ['content-type' => 'application/json']);
    }

    public function viewSwagger(): Response
    {
        $html = __DIR__ . '/../../../resources/views/index.php.stub';
        return new Response(file_get_contents($html), Response::HTTP_OK, ['content-type' => 'text/html']);
    }
}
