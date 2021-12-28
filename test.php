<?php
  	// 引入类
	require_once('inc/require.php');
	
	// 重定向
  	if(isset($_GET['id'])) {
    	$url_c = new url();
    	// 获取目标网址
    	$url = $url_c->get_url($_GET['id']);
    	// 重定向至目标网址
    	if($url) {
      		header('Location: ' . $url);
      		exit;
    	}
  	}
  	 function genUserNumber()
{
	$chars = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $username = "";
        for ( $i = 0; $i < 6; $i++ )
        {
            $random=mt_rand(0,strlen($chars)-1);
            $username .= $chars[$random];
        }
        return strtoupper(base_convert(time() - 1420070400, 10, 36)).$username;
}

echo genUserNumber();
?>