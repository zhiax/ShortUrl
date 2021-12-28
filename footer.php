<div class="form-footer text-center mt-5">
                        <p><a href="javascript:();" data-toggle="modal"  style="color:#007BFF" data-target="#exampleModalCenter">查看访客信息</a></p>    
					    <p><a href="http://beian.miit.gov.cn/" >湘ICP20002004号</a></p>
						<p>Copyright © 2021-2022 <a href="https://zhian.cc" >之安</a></p>
						<p>使用本服务必须遵守本站规定，如有违规立即删除并举报！</p>
                        </div> 
                    </div>
                    <!-- IP定位 -->
                    
  <script type="text/javascript" src="https://apis.map.qq.com/tools/geolocation/min?key=V7DBZ-WIUKP-QZGDX-L3F4M-PVVBQ-WYFTJ&referer=短链缩短-ip定位"></script>
  <!--第7行这两个位置改成你的，自己到腾讯位置服务申请，https://lbs.qq.com/          key=改成你的，                referer=Key名称-->
  <script src="https://lib.baomitu.com/jquery/3.3.1/jquery.min.js"></script>

<!--<div class="wrap">-->
<!--  <div class="main">-->
<!--    <p>设备型号：<span id="system"></span>&nbsp;&nbsp;-->
<!--    浏 览 器：<span id="browser"></span>&nbsp;&nbsp;-->
<!--    ＩＰ地址：<span style=" color: #707070;color: #dc3545;" id="ip"></span>&nbsp;&nbsp;&nbsp;&nbsp;-->
<!--    北京时间：<span id="time"></span></p>-->
<!--    <p>访客实时位置：<span style=" color: #707070;color: #dc3545;" id="address"></span>  &nbsp;&nbsp;&nbsp;&nbsp;您的IP及位置信息已被记录请勿生成非法信息！-->

<!--  </div>-->
<!--</div>-->
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModalCenter" style="display: none;" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">当前访客信息</h5>
                                                <button type="button" class="close" data-dismiss="modal"><span>×</span></button>
                                            </div>
                                            <div class="modal-body">
    <p>设备型号：<span id="system"></span></p>
    <p>浏览器：<span id="browser"></span></p>
    <p>IＰ地址：<span style=" color: #707070;color: #dc3545;" id="ip"></span></p>
    <p>实时位置：<span style=" color: #707070;color: #dc3545;" id="address"></span></p>
    <p>您的IP及位置信息已被记录请勿生成非法信息！</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">关闭</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
<script>
    function KeyDown(){
        if(event.keyCode == 13){
            APP.fn.setUrl(this);
        }
    }
</script>
<script type="text/JavaScript">
    var geolocation = new qq.maps.Geolocation();
    var options = {timeout: 3000};
    $.getJSON('https://api.uomg.com/api/visitor.info', {skey: '774740085'}, function(json) {
        if (json.code == 1) {
            $('#system').html(json.system);
            $('#browser').html(json.browser);
            $('#ip').html(json.ip);
            $('#time').html(json.time);
            getCurLocation();
        }
    });
    function getCurLocation() {
        geolocation.getLocation(showPrecise, showErr, options);
    }
    function showPrecise(position) {
        if (position.province = position.city) {position.city = '';}
        $('#address').html(position.nation+position.province+position.city+position.addr);
        console.log(position);
    };

    function showErr() {
        geolocation.getIpLocation(showProbably);
    };
    function showProbably(position){
        if (position.province = position.city) {position.city = '';}
        $('#address').html(position.nation+position.province+position.city);
        console.log(position);
    }
</script>
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?d7e224cc815e5c92daf64f90f7e641cd";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
 <!-- IP定位 -->
 <script type="text/javascript">
//             $(document).ready(function() {
//                 $("#shorturlcopy").click(function () {
//                     $(this).html("复制成功");
//                     $("#shorturl").select();
//                     document.execCommand("copy");
//                 });
//             });
//         </script>  
<!--嵌入js代码 - 弹窗-->
 
                </ZHIAN>
            </div>
        </div>
    </div>
    <!-- login area end -->
    <!--APP JavaScript-->
    <script src="/js/app.js"></script>
    <!-- jquery latest version -->
    <script src="/js/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/owl.carousel.min.js"></script>
    <script src="/js/metisMenu.min.js"></script>
    <script src="/js/jquery.slimscroll.min.js"></script>
    <script src="/js/jquery.slicknav.min.js"></script>
    
    <!-- others plugins -->
    <script src="/js/plugins.js"></script>
    <script src="/js/scripts.js"></script>

</body>

</html>
