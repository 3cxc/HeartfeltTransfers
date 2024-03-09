<?php
   #用以下载游戏的php
   #设置头
   header('Content-type: application/json; charset=utf-8"');
   #导入处理json的php
   include './function/function_json.php';
   #导入url参数查询
   include './function/function_query.php';
   #导入遍历匹配函数
   include './function/function_foreach.php';
   #导入配置文件
   include '../config.php';
   #遍历匹配
   exit(download(getTypeForeach(array_keys($download_array))));


   function download($tmp){

      global $App_Website;
      global $download_array;

      return(header("Location: ".$App_Website."/static/file/".$download_array[$tmp]));
   }
?>