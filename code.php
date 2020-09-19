<?php


header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Credentials: true');
header('Access-Control: no-cache');
header("Access-Control-Allow-Headers: Content-Type, *");
header("Access-Control-Allow-Methods: GET, OPTIONS");
$codes = ['123', 'ddd', '555', 'ENCEONE', 'g7H5jf4', 'laver'];
$code = $_GET["code"];
echo (in_array($code, $codes) ? true: false);

