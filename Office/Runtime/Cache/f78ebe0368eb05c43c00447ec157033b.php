<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=7" />
<style type="text/css">
<!--
*{ padding:0; margin:0; font-size:12px}
a:link,a:visited{text-decoration:none;color:#424242}
a:hover,a:active{color:#ff6600;text-decoration: underline}
.showMsg{border: 1px solid #79aaad; zoom:1; width:450px; height:172px;position:absolute;top:44%;left:50%;margin:-87px 0 0 -225px}
.showMsg h5{background-image: url(../Public/images/msg.png);background-repeat: no-repeat; color:#fff; padding-left:35px; height:25px; line-height:26px;*line-height:28px; overflow:hidden; font-size:14px; text-align:left}
.showMsg .content{ padding:46px 12px 10px 45px; font-size:14px; height:64px; text-align:left}
.showMsg .bottom{ background:#79aaad; margin: 0 1px 1px 1px;line-height:26px; *line-height:30px; height:26px; text-align:center}
.showMsg .ok,.showMsg .guery{ background: url(../Public/images/msg_bg.png) no-repeat 0px -560px ;}
.showMsg .guery{ background-position: left -366px;}
-->
</style>
<title>提示信息</title>
</head>

<body>
<div class="showMsg" style="text-align:center">
	<h5>提示信息</h5>
    <?php if(isset($message)): ?><div class="content ok" style="display:inline-block;display:-moz-inline-stack;zoom:1;*display:inline;max-width:330px;"></div>
    <?php else: ?>
    <div class="content guery" style="display:inline-block;display:-moz-inline-stack;zoom:1;*display:inline;max-width:330px;"></div><?php endif; ?>
    <div class="bottom">
页面自动 <a id="href" href="<?php echo($jumpUrl); ?>">跳转</a> 等待时间： <b id="wait"><?php echo($waitSecond); ?></b>
    </div>
</div>
<script type="text/javascript">
(function(){
var wait = document.getElementById('wait'),href = document.getElementById('href').href;
var interval = setInterval(function(){
    var time = --wait.innerHTML;
    if(time <= 0) {
        location.href = href;
        clearInterval(interval);
    };
}, 1000);
})();
</script>
</body>
</html>