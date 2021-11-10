<?php

require_once __DIR__ . '/responses/body/get-status.php';
require_once __DIR__ . '/responses/body/get-buildings.php';

function out($res) {
  echo json_encode(['result' => $res]);
  exit();
}

$json = file_get_contents('php://input');
$body = json_decode($json);

$method = $body->method;
$params = $body->params;

switch ($method) {
  case 'get_status': out(\KA\Body\get_status());
  case 'get_buildings': out(\KA\Body\get_buildings());
}
