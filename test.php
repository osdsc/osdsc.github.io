<?php
    $string = '百度知道';
    if (preg_match_all("/^([x81-xfe][x40-xfe])+$/"), $string, $match)
    // 使用 preg_match_all 判断的是全部是bai中文
    // 若使用 preg_match 则判断的是 是否包含中文
    // $match 是一符合正则要求结果的多维数组
    // 如果是 UTF-8 编码的话，则 可以将正则替换成  /^([\u4e00-\u9fa5])+$/
    {
        echo '中文';
    }
    else
    {
        echo '不是中文';
    }
 
 
?>
