<?php

namespace KA\Empire;

require_once __DIR__ . '/get-status.php';

function login() {
  return [
    'session_id' => 'this_is_a_session_id',
    'status' => \KA\Empire\get_status(),
  ];
}
