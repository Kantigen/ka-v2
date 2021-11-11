<?php

require_once __DIR__ . '/ka/keno-antigen.php';

use KA\KenoAntigen;

$json = file_get_contents('php://input');
$body = json_decode($json, true) ?? [];

$module = str_replace(['/', '.php'], '', $_SERVER['REQUEST_URI']);
$method = array_key_exists('method', $body) ? $body['method'] : '';
$params = array_key_exists('params', $body) ? $body['params'] : [];

KenoAntigen::handle_request($module, $method, $params);
