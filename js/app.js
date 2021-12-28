	
function copyText() {
        var input = document.getElementById("shorturl");
        input.select(); // 选中文本
        document.execCommand("copy"); // 执行浏览器复制命令
        Qmsg.success("复制成功");
}


var APP = (function(){

    var fn = {
        
        // 生成短地址
        setUrl: function(self) {
            var urlEl = document.getElementById('url'),
                tips = 'https://',
                request = {"url": urlEl.value};
            fn.getJson('api/set.php', true, JSON.stringify(request), function(res) {
                if(res.success == 'true') {
                    //urlEl.className = 'focus';
                    //urlEl.value = res.content.url;
                    $res = document.getElementById('shorturl')
                    $res.className = 'focus';
                    $res.value = res.content.url;
                } else {
                    urlEl.className = '';
                    urlEl.value = '';
                    urlEl.setAttribute('placeholder', res.content);
                    // console.log(res.content);
                    
	            switch (res.content) {
	                case '链接已经是短地址了。':
	                    Qmsg.info("已经是短链接啦");
	                    break;
	               case '请输入正确格式的网址。':
	                   Qmsg.warning("请输入正确的格式");
	                   break;
	               case '调用参数不能为空。':
	                   Qmsg.warning("调用参数不能为空。");
	                default:
	                    // code
	            }
                    setTimeout(function() {
                        urlEl.setAttribute('placeholder', tips);
                    }, 3000);
                }
            });
        },
        // 获取 JSON 数据
        getJson: function(url, post, data, callback) {
            var xhr = new XMLHttpRequest(),
                type = (post) ? 'POST' : 'GET';
            xhr.onreadystatechange = function() {
                if(xhr.readyState == 4 && xhr.status == 200) {
                    var json = JSON.parse(xhr.responseText);
                    callback(json);
                } else if(xhr.readyState == 4) {
                    callback(false);
                }
            }
            xhr.open(type, url, true);
            xhr.send(data);
        } 
    },
    init = function() {
        setTimeout(function() {
            var el = document.getElementsByTagName('html')[0];
            el.className = 'on';
        }, 10);
    };
    return {fn: fn, init: init}
})();

document.addEventListener('DOMContentLoaded', function() {APP.init();})