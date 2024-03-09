<?php
  #403
  header('Content-type: application/json; charset=utf-8"');
  #导入处理json的php
  require_once('../../data/function/function_json.php');
  $json_str = '{"code":403,"reason":"This operation is not allowed to be performed"}';
  #设置返回的信息
  exit(formatJson($json_str));
?>