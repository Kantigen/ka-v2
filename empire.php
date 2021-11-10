<?php

require_once __DIR__ . '/responses/empire/login.php';
require_once __DIR__ . '/responses/empire/get-status.php';

function out($res) {
  echo json_encode(['result' => $res]);
  exit();
}

$json = file_get_contents('php://input');
$body = json_decode($json);

$method = $body->method;
$params = $body->params;

switch ($method) {
  case 'login': out(\KA\Empire\login());
  case 'get_status': out(\KA\Empire\get_status());
}
