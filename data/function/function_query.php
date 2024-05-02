<?php
  # 获取到url,并且进行url解码
  function queryUrl(){
     return urldecode('https://'.$_SERVER['HTTP_HOST'].$_SERVER["REQUEST_URI"]);
  }
  # 解析url的参数
  function parseUrl($url){
    if(filter_var($url, FILTER_VALIDATE_URL) !== false){ #检查类型
      return parse_url($url);
    }else{
      return null;
    }
  }
?>
