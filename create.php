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
                        <h4>短链生成</h4>
                        <p>免费在线网址缩短服务</p>
                    </div>
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active show" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">短链</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">二维码</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">统计链接</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade active show" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                        <p>
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" id="urlbox" class="form-control cz-shorten-input" readonly name="url" value="https://dl61.cn/3vO">
                                                <div class="input-group-append">
                                                    <button class="btn btn-primary" type="button" id="copy-button">复制</button>
                                                </div>
                                            </div>                                            
                                            
                                            
                                        </p>
                                    </div>
                                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                        <p>
                                           <center>
                                               <img src="qr/api.php?text=https://dl61.cn/3vO&size=180">
                                           </center>    
                                        </p>
                                    </div>
                                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                                      
                                            <h6><a style="color: #2296f3;"href="https://dl61.cn/stats.php?id=3vO">https://dl61.cn/stats.php?id=3vO</a></h6>
                                        <div class="alert alert-danger" role="alert" style="margin-top:10px">

                                            <strong>这是你的专属短链统计页面链接请自行保存！ </strong><br>严禁生成违法链接！一经发现直接删除！并举报违规链接！ 
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                    
                   
                    <div class="login-form-body">
                        <div class="submit-btn-area">
                            <a class="fb-login" id="submit" type="button" onclick="APP.fn.setUrl(this)">再次生成</a>
                                                <div class="login-other row mt-4">
                                <div class="col-6">
                                    <a class="fb-login" href="javascript:void(0);">总点击：43028次</a>
                                </div>
                                <div class="col-6">
                                    <a class="google-login" href="javascript:void(0);">总生成：308个</i></a>
                                </div>
                            </div>
                        </div>
                        
<?php include 'footer.php' ?>
