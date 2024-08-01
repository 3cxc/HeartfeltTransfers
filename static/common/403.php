<?php
  header('Content-type: application/json; charset=utf-8"');
  require_once('../../data/function/function_json.php');

  $json_str = '{"code":403,"reason":"This operation is not allowed to be performed"}';

  exit(formatJson($json_str));
?>