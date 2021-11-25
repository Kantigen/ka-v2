<?php

namespace KA\Empire;

function get_boosts() {
  return [
    "boosts" => [
      "food"          => date(\KA\KenoAntigen::$DATE_FORMAT, strtotime('+1 week')),
      "ore"           => date(\KA\KenoAntigen::$DATE_FORMAT, strtotime('+1 week')),
      "energy"        => date(\KA\KenoAntigen::$DATE_FORMAT, strtotime('+1 week')),
      "water"         => date(\KA\KenoAntigen::$DATE_FORMAT, strtotime('+1 week')),
      "happiness"     => date(\KA\KenoAntigen::$DATE_FORMAT, strtotime('+48 hours')),
      "storage"       => date(\KA\KenoAntigen::$DATE_FORMAT, strtotime('+1 hour')),
      "building"      => date(\KA\KenoAntigen::$DATE_FORMAT, strtotime('+1 hour')),
      "ship_build"    => date(\KA\KenoAntigen::$DATE_FORMAT, strtotime('+1 hour')),
      "ship_speed"    => date(\KA\KenoAntigen::$DATE_FORMAT, strtotime('-48 hours')),
      "spy_training"  => date(\KA\KenoAntigen::$DATE_FORMAT, strtotime('-48 hours')),
    ],
    "status" => \KA\Empire\get_status(),
  ];
}
