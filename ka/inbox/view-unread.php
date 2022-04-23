<?php

namespace KA\Inbox;

function view_unread() {
  return [
    'messages' => [],
    'message_count' => 0,
    'status' => \KA\Empire\get_status(),
  ];
}
