<?php
  #设置头
  header('Content-type: application/json; charset=utf-8"');
  #导入处理json的php
  require_once('./data/function/function_json.php');
  require_once('./config.php');

  #格式化数组为json并输出
  $json_arr = array("Status" => "OK","Runtime-Mode" => "productionMode","Application-Author" => "3cxc","Application-Description" => $API_Description,"Application-Version" => "3.2","Application-Owner" => $API_Owner);
  exit(formatJson($json_arr));
?>