<?php

namespace KA;

require_once __DIR__ . '/body/get-buildings.php';
require_once __DIR__ . '/body/get-status.php';
require_once __DIR__ . '/empire/get-status.php';
require_once __DIR__ . '/empire/login.php';
require_once __DIR__ . '/empire/logout.php';
require_once __DIR__ . '/server/get-status.php';

class KenoAntigen {
  public static function handle_request($module, $method, $params) {
    $result = self::get_result($module, $method, $params);

    if (isset($result)) {
      echo json_encode([
        'jsonrpc' => '2.0',
        'id' => 1,
        'result' => $result,
      ]);
    } else {
      echo json_encode([
        'jsonrpc' => '2.0',
        'id' => 1,
        'error' => [
          'message' => 'Invalid request.',
          'data' => null,
        ],
      ]);
    }
  }

  public static function get_result($module, $method, $params) {
    if ($module == 'body') {
      switch ($method) {
        case 'get_buildings': return Body\get_buildings();
        case 'get_status':  return Body\get_status();
      }
    }

    else if ($module == 'empire') {
      switch ($method) {
        case 'login': return Empire\login();
        case 'logout': return Empire\logout();
        case 'get_status': return Empire\get_status();
      }
    }
  }
}
