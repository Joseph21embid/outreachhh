<?php
// ✅ STEP 1: WebSocket Server - ChatServer.php
namespace WSServer;

use Ratchet\MessageComponentInterface;
use Ratchet\ConnectionInterface;

class ChatServer implements MessageComponentInterface {
    protected $clients = [];

    public function __construct() {
        echo "\n✅ WebSocket Server Started...\n";
    }

    public function onOpen(ConnectionInterface $conn) {
        $this->clients[$conn->resourceId] = $conn;
        echo "🟢 Connection opened: {$conn->resourceId}\n";
    }

    public function onMessage(ConnectionInterface $from, $msg) {
        echo "📩 Msg from {$from->resourceId}: $msg\n";

        foreach ($this->clients as $client) {
            $client->send($msg); // Send to ALL including sender
        }
    }

    public function onClose(ConnectionInterface $conn) {
        unset($this->clients[$conn->resourceId]);
        echo "🔴 Connection closed: {$conn->resourceId}\n";
    }

    public function onError(ConnectionInterface $conn, \Exception $e) {
        echo "⚠️ Error: {$e->getMessage()}\n";
        $conn->close();
    }
}