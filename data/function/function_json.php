<?php
  #格式化json并返回json字符串
  function formatJson($str){
    if(is_string($str)){ #检查类型
          $json_obj = json_decode($str); #格式化为php对象 / json对象
          $json_str = json_encode($json_obj, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
          return $json_str;
    }else if(is_array($str)){
          $json_str = json_encode($str, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
          return $json_str;
    }else return null;
  }
?>