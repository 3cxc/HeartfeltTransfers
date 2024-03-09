<?php
  #获取url
  function queryUrl(){
     # 获取到url,并且进行url解码
     $url = urldecode('https://'.$_SERVER['SERVER_NAME'].':'.$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"]);
     return $url;
  }
  #解析url的参数
  function parseUrl($url){
    if(filter_var($url, FILTER_VALIDATE_URL) !== false){ #检查类型
      return parse_url($url);
    }else{
      return null;
    }
  }
?>