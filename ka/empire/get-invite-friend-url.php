<?php

namespace KA\Empire;

function get_invite_friend_url() {
  return [
    'referral_url' => 'https://demo.kenoantigen.com/',
    'status' => \KA\Empire\get_status(),
  ];
}
