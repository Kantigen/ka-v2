<?php

namespace KA\Empire;

function get_own_profile() {
  return [
    'profile' => [
      'id'               => 1234,
      'name'             => 'Rome',
      'description'      => 'A test empire',
      'status_message'   => 'Making the Lacuna Expanse a better expanse',
      'medals' => [
        [
          'id'           => 1234,
          'name'         => 'Built Level 1 Building',
          'image'        => 'building1',
          'date'         => '2013 01 31 12=>34=>45 +0600',
          'public' => 1,
          'times_earned' => 10
        ],
        [
          'id'           => 12345,
          'name'         => 'Built Level 2 Building',
          'image'        => 'building2',
          'date'         => '2013 01 31 12=>34=>45 +0600',
          'public' => 0,
          'times_earned' => 4
        ],
      ],
      'city'             => '',
      'country'          => '',
      'notes'            => 'Just keep building...',
      'skype'            => '',
      'player_name'      => '',
      'skip_happiness_warnings'  => 0,
      'skip_resource_warnings'   => 0,
      'skip_pollution_warnings'  => 0,
      'skip_medal_messages'      => 0,
      'skip_facebook_wall_posts' => 0,
      'skip_found_nothing'       => 0,
      'skip_excavator_resources' => 0,
      'skip_excavator_glyph'     => 0,
      'skip_excavator_plan'      => 0,
      'skip_spy_recovery'        => 0,
      'skip_probe_detected'      => 0,
      'skip_attack_messages'     => 0,
      'email'            => 'hello@example.com',
      'sitter_password'  => ''
    ],
    'status' => \KA\Empire\get_status()
  ];
}
