<?php
   header('Content-type: application/json; charset=utf-8"');

   require_once './function/function_json.php';
   require_once './function/function_query.php';
   require_once './function/function_foreach.php';
   require_once '../config/config_data.php';
   require_once '../config/config_global.php';

   #遍历匹配
   if ($Anti_switch){
      exit(http_response_code(403));
   }
   exit(download(getTypeForeach(array_keys($download_array))));


   function download($tmp){

      global $App_Website;
      global $download_array;

      return(header("Location: ".$App_Website."/static/file/".$download_array[$tmp]));
   }
?>