<?php

namespace Ornikar\SwaggerUi;

use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Ornikar\SwaggerUi\Http\Controllers\SwaggerUIController;
use Ornikar\SwaggerUi\Http\Middleware\DumbMiddleware;

class SwaggerUiServiceProvider extends ServiceProvider
{
    public function boot(Router $router) : void
    {
        $router->aliasMiddleware('ornikar_web', DumbMiddleware::class);

        $json = base_path() . DIRECTORY_SEPARATOR . config('l5-swagger.defaults.paths.docs')
            . DIRECTORY_SEPARATOR . config('l5-swagger.documentations.default.paths.docs_json');

        $this->app
            ->when(SwaggerUIController::class)
            ->needs('$openApiFilePath')
            ->give($json);

        Route::prefix('swagger-ui')
            ->middleware(['ornikar_web'])
            ->group(function () {
                Route::get('/', 'Ornikar\SwaggerUi\Http\Controllers\SwaggerUIController@viewSwagger')
                    ->name('ornikar-swagger-ui');

                Route::get('openapi.json', 'Ornikar\SwaggerUi\Http\Controllers\SwaggerUIController@getApiDocJson')
                    ->name('ornikar-swagger-ui-openapi-json');
            });
    }
}
