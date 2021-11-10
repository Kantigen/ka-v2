<?php

namespace KA\Server;

require_once __DIR__ . '/status-block.php';

function get_status() {
  return \KA\Server\status_block();
}
