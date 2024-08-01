<?php
  header('Content-type: application/json; charset=utf-8"');
  require_once('../../data/function/function_json.php');

  $json_str = '{"code":502,"reason":"Bad Gateway"}';

  exit(formatJson($json_str));
?>
