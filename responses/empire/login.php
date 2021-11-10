<?php

namespace KA\Empire;

require_once __DIR__ . '/../get-status.php';

function login() {
  return [
    'session_id' => 'this_is_a_session_id',
    'status' => \KA\get_status(), // TODO: I think this should only return empire/get_status
  ];
}
