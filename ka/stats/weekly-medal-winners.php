<?php

namespace KA\Stats;

function weekly_medal_winners() {
  return [
    'status' => \KA\Empire\get_status(),
    'winners' => [
      [
        'empire_id' => 'id-goes-here',
        'empire_name' => 'Earthlings',
        'medal_name' => 'Dirtiest Empire In The Game',
        'medal_image' => 'dirtiest_empire_in_the_game',
        'times_earned' => 4,
      ],
    ]
  ];
}
