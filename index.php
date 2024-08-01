<?php
  header('Content-type: application/json; charset=utf-8"');

  require_once('./data/function/function_json.php');
  require_once('./config/config_global.php');

  $Status = "OK";
  $RunTime_Mode = "productionMode";
  
  if($Anti_switch){
    $Status = "maintenanceMode";
  }
  if($Debug_mode){
    $RunTime_Mode = "DebuggingMode";
  }

  #格式化数组为json并输出
  $json_arr = array(
    "Status" => $Status,
    "Runtime-Mode" => $RunTime_Mode,
    "Application-Author" => "3cxc",
    "Application-Description" => $API_Description,
    "Application-Version" => "3.3",
    "Application-Owner" => $API_Owner);
  exit(formatJson($json_arr));

?>