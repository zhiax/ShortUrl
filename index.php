<?php
  	// 引入类
	require_once('inc/require.php');
	
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
?>

<?php include 'header.php' ?>
<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- login area start -->
    <div class="login-area">
        <div class="container">
            <div class="login-box ptb--20">
                <ZHIAN>
                    <div class="login-form-head">
                        <h4><?php echo get_title() ?></h4>
                        <p><?php echo get_description(); ?></p>
                    </div>
                    <div class="login-form-body">
                        <div class="form-gp ">
                            <label for="exampleInputName1">源网址</label>
                            <input id="url" type="text" placeholder="请输入要转换的网址" onkeydown="KeyDown()" />
                            <i class="ti-world"></i>
                        </div>
                        
                    <div class="form-gp">
                            <label for="exampleInputEmail1">短网址</label>
                            <input id="shorturl" type="text" placeholder="等待生成..." readonly/>
                            <i class="ti-link"></i>
                        </div>
                        
                        <!--<div class="form-gp">-->
                        <!--    <label for="exampleInputEmail1">https://dl61.cn/</label>-->
                        <!--    <input type="text" id="cust" name="cust" placeholder="自定义链接（可不设置）" autocomplete="off">-->
                        <!--    <i class="ti-link"></i>-->
                        <!--</div>-->
                        <!--<input name="UserIp" value="119.39.128.126" type="hidden">-->
                        
                        <!--<div class="form-gp">-->
                        <!--    <label for="exampleInputPassword1">设置链接密码</label>-->
                        <!--    <input type="password" autocomplete="new-password" id="pass" name="pass" placeholder="链接访问密码（可不设置）">-->
                        <!--    <i class="ti-lock"></i>-->
                        <!--</div>-->
                       
                        <div class="submit-btn-area">
                            <input id="submit" type="button" value="生成" onclick="APP.fn.setUrl(this)" />
                            <div class="login-other row mt-4">
                                <div class="col-6">
                                    <!--<a class="fb-login" id="submit" type="button" onclick="APP.fn.setUrl(this)">生成</a>-->
                                    <a class="fb-login" href="javascript:void(0);">总点击：<?php echo "$counter"; ?>次</a>
                                    
                                </div>
                                <div class="col-6">
                                    <a class="google-login" id="shorturlcopy" type="button" onclick="copyText()">复制</i></a>
                                </div>
                                
                                <!--<div class="col-6">-->
                                <!--    <a class="fb-login" href="javascript:void(0);">总点击：次</a>-->
                                <!--</div>-->
                                <!--<div class="col-6">-->
                                <!--    <a class="google-login" href="javascript:void(0);">总生成：个</i></a>-->
                                <!--</div>-->
                                
                            </div>
                        </div>

<?php include 'footer.php' ?>
