<?php

namespace KA\Empire;

function invite_friend() {
  return [
    'sent' => [],
    'not_sent' => [],
    'status' => \KA\Empire\get_status(),
  ];
}
