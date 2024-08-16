# WebsocketNotifyBundle
Symfony bundle that integrates websocket-notify API calls.

## Installation

### Symfony

1. Download the package with composer: `$ composer require tbmatuka/websocket-notify-bundle`
1. Add the bundle to `bundles.php` if it wasn't added automatically: `Tbmatuka\EditorjsBundle\TbmatukaWebsocketNotifyBundle::class => ['all' => true],`
1. Copy the example package config file (`examples/websocket_notify.yaml`) or use it as an example to create your own configuration.

### JavaScript

There is an example of the JS implementation in `examples/editorjs-init.js`.
