# Ornikar Swagger UI

This package makes it easy to make your project's Swagger (OpenAPI v3 JSON) file accessible in a Swagger UI right in your Laravel application.

## Installation
You can install the package via composer:

Add the repository to your `composer.json`:
```json
"repositories": [
    {
        "type": "vcs",
        "url": "https://github.com/ornikar/simple-swagger-ui.git"
    }
]
```
then 
```bash
composer require ornikar/simple-swagger-ui
```

## Usage
The Swagger UI is exposed at `/swagger-ui`.

Example: https://firstname-lastname-services-proxy.onroad.dev/firstname-lastname-booking-service/swagger-ui

## Testing
TODO

## Linting

```bash
composer lint
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email [me](mailto:jacques.houegbonou@ornikar) instead of using the issue tracker.

## Credits

- [Günther Debrauwer](https://github.com/gdebrauwer)
- [Camille Baronnet](https://github.com/camillebaronnet)
- All Contributors

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
