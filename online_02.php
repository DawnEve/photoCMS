﻿<?php
include 'checkcookie.php';
$saishi_id=$_POST['saishi_id'];
$group_id=$_POST['group_id'];
//print_r($_POST);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>摄影网站</title>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
   
</head>
<body>
<script type="text/javascript">
function showPreview(index, url){
	index++;
	document.getElementById("spic"+index).src = url;
}
</script>
<form action="sub.php" method="post" enctype="multipart/form-data">
    <div class="imgbox" style="background-image: url(images/temp/online_02_bg.jpg);" onclick="loginHide();">
        <a href="index.php" class="online_logo"></a>
        <!--内容start-->
        <div class="online_main">
            <div class="H2_title">您将上传<?php if($group_id==4){
				echo "【"."一般组"."】";	
			}if($group_id==3){echo "【"."我去过的地方2015专题组"."】";}?></div>
            <ul class="upload_list">
                <li>
                    <div class="pic">
                        <span></span>
			<img src="" id="spic1" />
                        <input type='file' name="pic[]" style=" width:136px; height:97px; position:absolute;opacity:0;z-index:3" />
                        
                    </div>
                    <div class="upload_text">
                        <p><input type="text" name="biaoti[]" class="input_text" placeholder="请输入作品名（必选）" /></p>
                        <p><input type="text" name="info[]" class="input_text" placeholder="请输入作品说明" /></p>
                    </div>
                </li>
                <li>
		    <div class="pic"><span></span><img src="" id="spic2" />
                       <input type='file'  name="pic[]" style=" width:136px; height:97px; position:absolute;opacity:0;z-index:3" /></div>
                    <div class="upload_text">
                        <p><input type="text" name="biaoti[]" class="input_text" placeholder="请输入作品名（必选）" /></p>
                        <p><input type="text" name="info[]" class="input_text" placeholder="请输入作品说明" /></p>
                    </div>
                </li>
                <li>
		    <div class="pic"><span></span>
			<img src="" id="spic3" />
                        <input type='file' name="pic[]"  style=" width:136px; height:97px; position:absolute;opacity:0;z-index:3" />
</div>
                    <div class="upload_text">
                        <p><input type="text" name="biaoti[]" class="input_text" placeholder="请输入作品名（必选）" /></p>
                        <p><input type="text" name="info[]" class="input_text" placeholder="请输入作品说明" /></p>
                    </div>
                </li>
                <li>
		    <div class="pic"><span></span>
			<img src="" id="spic4" />
                        <input type='file' name="pic[]" style=" width:136px; height:97px; position:absolute;opacity:0;z-index:3" />
</div>
                    <div class="upload_text">
                        <p><input type="text" name="biaoti[]" class="input_text" placeholder="请输入作品名（必选）" /></p>
                        <p><input type="text" name="info[]" class="input_text" placeholder="请输入作品说明" /></p>
                    </div>
                </li>
            </ul>
            <div class="online_operate">
                <div class="upload_tips">参赛文件格式要求：<br />JPEG格式，文件尺寸最大为4096x2160像素</div>
                <div class="online_btn"><span class="btn05 fr">让我再想想</span><span class="btn05" onclick="$('#Online_pay').show();">确认支付</span></div>
            </div>
        </div>
        <!--内容end-->
    </div>
    <div class="header online_header">
        <b class="header_title">在线报名</b>
         <div class="login_tips">
		<?php
			if($login==0)
			{
		?> 
		 <span class="login_icon" onclick="loginShow();">登录</span>								
		<?php
			}else
			if($login==1)
			{
		?>
				<a href="member.php"><span class="login_icon"  >会员中心</span></a>
				
				| <a href="logout.php"><span class="login_icon"  >退出</span></a>
		 <?php
			 }
	         ?>	
	</div>
    </div>
    <div class="login_box">
        <div class="form_box">
            <table cellpadding="0" cellspacing="0" class="form_table">
                <tr><td>账号：</td><td><input id="name" type="text" class="text" placeholder="手机号码/电子邮箱地址" /></td></tr>
                <tr><td>密码：</td><td><input id="password" type="password" class="text" /></td></tr>
                <tr><td colspan="2"><a href="#" class="fr forget_a">忘记密码？</a><span class="span_check"><input id="Checkbox1" type="checkbox" /><b>自动登录</b></span></td></tr>
                <tr><th colspan="2"><input id="btn1" type="button" value="登录" class="btn" onclick="loginHide();" /><p><a href="register.php">没有账号?</a></p></th></tr>
            </table>
        </div>
    </div>
    <!--确认支付弹窗start-->
    <div class="online_alert" id="Online_pay">
        <span class="close" onclick="$('#Online_pay').hide();"></span>
        <div class="online_pay_tips">
            温馨提示：<br />
            请确认您已经完成了所有参赛照片的上传，支付完毕后将无法修改。
        </div>
	<div class="alert_btn">
        <!--用隐藏表单传递赛事id和赛事组id -->
	<input type='hidden' name="saishi_id" value="<?php echo $saishi_id; ?>"/>
	<input type='hidden' name="group_id" value="<?php echo $group_id;?>" />
	<input type="submit" class="btn06" value="确认" />
	<span class="inlineBlock pl65"><a href="javascript:void(0);" class="btn06" onclick="$('#Online_pay').hide();">再想想</a></span>
        </div>
    </div>
</form>
<!--
 <div class="alert_btn"><a href="Online_03.php" class="btn06">确认</a><span class="inlineBlock pl65"><a href="javascript:void(0);" class="btn06" onclick="$('#Online_pay').hide();">再想想</a></span></div>
    </div>
-->
    <!--确认支付弹窗End-->
</body>
</html>
<script type="text/javascript">
    $(".imgbox").height($(window).height());
    function loginShow() {
        $(".login_box").animate({ right: "0" }, 500);
    }
    function loginHide() {
        $(".login_box").animate({ right: "-250px" }, 500);
    }
</script>




<script type="text/javascript">
$(document).ready(function(){
	//'缩略图'提交iframe方案
	//添加该iframe框架
	$('body').append( $('<iframe id="exec_target" name="exec_target" style="position:absolute; width:0;height:0;"></iframe>') );
	
	//绑定提交事件
	wjl=[]
	$("input[name='pic[]']").each(function(index){
		wjl[index]=this;
		//单击事件
		$(this).change(function(){
			zz=this
			//方案1：本地预览方案(html5新特性)
			if(typeof FileReader == "function"){
				showPreviewHtml5(this, $('#spic'+(index+1))[0]);
			}else{
			//方案2：上传到服务器端的预览方案(iframe)
				//添加临时表单
				var sf=document.createElement('form');
				sf.setAttribute('method','post');
				sf.setAttribute('action','doImgPreviewUpload.php');
				sf.setAttribute('target','exec_target');
				sf.setAttribute('enctype','multipart/form-data');			
				sf.appendChild( this );
				
				//添加临时文本框
				var oInput=document.createElement('input');
				oInput.setAttribute('type','text');
				oInput.setAttribute('name','index');
				oInput.setAttribute('value',index);
				sf.appendChild(oInput);
			
				//提交'缩略图'
				sf.submit();

				//再把input file放回原处
				$('.upload_list li img')[index].parentNode.appendChild(this);
			}
		});
	})
});



// 检查是否支持FileReader对象
function showPreviewHtml5(originObj, targetImgObj){
	if (typeof FileReader != 'undefined') {
	　　var acceptedTypes = {
	　　　　'image/png': true,
	　　　　'image/jpeg': true,
	　　　　'image/gif': true
	　　};
	　　if (acceptedTypes[originObj.files[0].type] === true) {
	　　　　var reader = new FileReader();
	　　　　reader.onload = function (event) {
	　　　　　　//var image = new Image();
	　　　　　　var image = targetImgObj;
	　　　　　　image.src = event.target.result;
	　　　　};
	　　	reader.readAsDataURL(originObj.files[0]);
	　　}
	}
}
</script>