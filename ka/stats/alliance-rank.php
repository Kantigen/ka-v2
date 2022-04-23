<?php

namespace KA\Stats;

function alliance_rank() {
  return [
    'status' => \KA\Empire\get_status(),
    'alliances' => [
      [
        'alliance_id' => 'id-goes-here',                   # unique id
        'alliance_name' => 'Earthlings',                   # alliance name
        'member_count' => '1',                           # number of empires in the alliance
        'space_station_count' => 0,                      # number of space stations this alliance controlls
        'influence' => 0,                                # the number of stars under the jurisdiction of this alliance
        'colony_count' => '1',                           # number of planets colonized
        'population' => '7000000000',                    # number of citizens on all planets in the empires of the alliance
        'average_empire_size' => '7000000000',                   # average size of empires in the alliance
        'building_count' => '50',                        # number of buildings across all colonies
        'average_building_level' => '20',                # average level of all buildings across all colonies
        'offense_success_rate' => '0.793',               # the offense rate of success of spies at all colonies
        'defense_success_rate' => '0.49312',             # the defense rate of success of spies at all colonies
        'dirtiest' => '7941'                            # the number of times a spy has attempted to hurt another empire
      ],
    ],
    'total_alliances' => 1,
    'page_number' => 1
  ];
}
