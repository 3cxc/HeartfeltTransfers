<?php
    function getTypeForeach($type_array){
        #获取到url
        $url = queryUrl();
        #url参数数组
        $array = parseUrl($url);
        #检查链接是否携带了参数
        if(key_exists('query',$array)){
            #将链接携带的参数提取出来
            parse_str($array['query'],$query_arr);
            #检查是否有type参数
            if(key_exists('type',$query_arr)){
                #遍历匹配
                foreach ($type_array as $tmp){
                    if($query_arr['type'] == $tmp){
                        return $tmp;
                    }
                }
                exit(formatJson('{"code":403,"reason":"Illegal parameter content"}')); 
            }
        }else {
            exit(formatJson('{"code":403,"reason":"The \'type\' parameter is not specified"}')); #反馈不携带参数的错误
        }
    }
?>