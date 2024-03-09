<?php
  #502
  header('Content-type: application/json; charset=utf-8"');
  #导入处理json的php
  require_once('../../data/function/function_json.php');
  $json_str = '{"code":502,"reason":"Bad Gateway"}';
  #设置返回的信息
  exit(formatJson($json_str));
?>
