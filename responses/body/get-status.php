<?php

namespace KA\Body;

require_once __DIR__ . '/status-block.php';
require_once __DIR__ . '/../empire/status-block.php';
require_once __DIR__ . '/../server/status-block.php';

function get_status() {
  return [
    'server' => \KA\Server\status_block(),
    'empire' => \KA\Empire\status_block(),
    'body' => \KA\Body\status_block(),
  ];
}
