<?php
  header('Content-type: application/json; charset=utf-8"');
  require_once('../../data/function/function_json.php');

  $json_str = '{"code":404,"reason":"The specified URL does not exist"}';

  exit(formatJson($json_str));
?>
