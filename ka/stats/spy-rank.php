<?php

namespace KA\Stats;

function spy_rank() {
  return [
    'status' => \KA\Empire\get_status(),
    'spies' => [
        [
          'empire_id' => 'id-goes-here',                   # unique id
          'empire_name' => 'Earthlings',                   # empire name
          'spy_id' => 'id-goes-here',                      # unique id
          'spy_name' => 'Agent Null',                      # the name of this spy
          'age' => '3693',                                 # how old is this guy in seconds
          'level' => '18',                                 # the level of this spy
          'success_rate' => '0.731',                       # the rate of success this spy has had for both offense and defensive tasks
          'dirtiest' => '7941',                            # the number of times a spy has attempted to hurt another empire
        ],
      ]
  ];
}
