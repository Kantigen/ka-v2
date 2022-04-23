<?php

namespace KA\Inbox;

function view_archived() {
  return [
    'messages' => [],
    'message_count' => 0,
    'status' => \KA\Empire\get_status(),
  ];
}
