<?php
require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/ChatServer.php';

use Ratchet\Server\IoServer;
use Ratchet\Http\HttpServer;
use Ratchet\WebSocket\WsServer;
use WSServer\ChatServer;

$server = IoServer::factory(
    new HttpServer(new WsServer(new ChatServer())),
    8000
);

$server->run();
