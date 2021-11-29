<?php

namespace KA\Server;

function status_block() {
  return [
    'time' => date(\KA\KenoAntigen::$DATE_FORMAT),
    'version' => '1.0',
    'star_map_size' => [
      'x' => [ -15, 15 ],
      'y' => [ -15, 15 ],
      'z' => [ -15, 15 ]
    ],
    'rpc_limit' => 10000,
  ];
}
