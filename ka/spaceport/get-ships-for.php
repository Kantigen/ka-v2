<?php

namespace KA\Spaceport;

function get_ships_for() {
  return [
    'incoming' => [],
    'available' => [],
    'unavailable' => [],
    'orbiting' => [],
    'mining_platforms' => [],
    'fleet_send_limit' => 20,
    'status' => \KA\Body\get_status(),
  ];
}
