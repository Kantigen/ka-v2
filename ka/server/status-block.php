<?php

namespace KA\Server;

function status_block() {
  return [
    'time' => date(\KA\KenoAntigen::$DATE_FORMAT),
    'version' => '1.0',
    'star_map_size' => 500,
    'rpc_limit' => 10000,
  ];
}
