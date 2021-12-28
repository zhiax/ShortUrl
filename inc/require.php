<?php
    // 引入配置文件
    require_once(dirname(__FILE__) . '/../config.php');
    // 引入域名缩址库
    require_once('functions.php');
    require_once('class/db.class.php');
    require_once('class/url.class.php');
    // 初始化数据库
    global $db_c;
    $db_c = new db();
    //统计用户
    @session_start();  
    $counter = intval(file_get_contents("counter.dat"));  
    if(!$_SESSION['#'])  
    {  
     $_SESSION['#'] = true;  
     $counter++;  
     $fp = fopen("counter.dat","w");  
     fwrite($fp, $counter);  
     fclose($fp);  
    }  
?>
