<?php

namespace KA\Stats;

function empire_rank() {
  return [
    'status' => \KA\Empire\get_status(),
    'empires' => [
      [
        'empire_id' => 'id-goes-here',                   # unique id
        'empire_name' => 'Earthlings',                   # empire name
        'alliance_id' => 'id-goes-here',                 # unique id
        'alliance_name' => 'Earthlings Allied',          # alliance name
        'colony_count' => '1',                           # number of planets colonized
        'population' => '7000000000',                    # number of citizens on all planets in the empire
        'empire_size' => '7000000000',                   # size of entire empire
        'building_count' => '50',                        # number of buildings across all colonies
        'average_building_level' => '20',                # average level of all buildings across all colonies
        'offense_success_rate' => '0.793',               # the offense rate of success of spies at all colonies
        'defense_success_rate' => '0.49312',             # the defense rate of success of spies at all colonies
        'dirtiest' => '7941'                            # the number of times a spy has attempted to hurt another empire
      ],
    ],
    'total_empires' => 1,
    'page_number' => 1
  ];
};
