<?php

namespace KA\Stats;

function colony_rank() {
  return [
    'status' => \KA\Empire\get_status(),
    'colonies' => [
      [
        'empire_id' => 'id-goes-here',                   # unique id
        'empire_name' => 'Earthlings',                   # empire name
        'planet_id' => 'id-goes-here',                   # unique id
        'planet_name' => 'Earth',                        # name of the planet
        'population' => '7000000000',                    # number of citizens on planet
        'building_count' => '50',                        # number of buildings at this colony
        'average_building_level' => '20',                # average level of all buildings at this colony
        'highest_building_level' => '26'                 # highest building at this colony
      ],
    ]
  ];
}
