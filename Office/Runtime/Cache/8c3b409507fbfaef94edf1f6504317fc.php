<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="../Public/css/index.css" />
<script type="text/javascript" src="../Public/js/quickView.js"></script>
<title>添加TAGS标签</title>
</head>
<body>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td class="LineRightBlue1">
      <table width="95%" border="0" cellpadding="0" cellspacing="0" style="margin-left:20px;">
      <tr>
        <td width="88%" height="24">添加TAGS标签 【<a href="<?php echo U('Tags/index');?>">返回标签列表</a>】</td>
        <td width="12%" align="right" class="bt_add"></td>
      </tr>
    </table>
    </td>
  </tr>
</table>

<form action="<?php echo U('addTags');?>" method="post">
<DIV class="PageContent">
<table width="98%" border="0" style="margin:20px;" class="ListCategory">
  <tr>
    <td width="9%">标签名称：</td>
    <td width="91%" height="35"><input name="name" type="text" class="FormSmall" style="width: 220px;"> <span style="color:#F00; font-size:12px;">*必填</span> 
      <a title='Tags标签将与信息的标题和描述关联<br/>所以填写的标签注意与标题和描述信息要有所关联'style="margin-left: 3px;" href="#"><img src="../Public/images/help.gif"></a>
    </td>
  </tr>

  <tr>
    <td style="color:blue;">标签名称 (英文)：</td>
    <td height="35"><input name="ename" type="text" class="FormSmall" style="width: 220px;"> <span style="color:#F00; font-size:12px;">*必填</span> 
    </td>
  </tr>

  <tr>
    <td>所属栏目：</td>
    <td height="35">
      <select name="type" style="height:28px;">
        <option value='Product'>产品栏目</option>
        <option value='New'>新闻栏目</option>
        <option value='Photo'>图片栏目</option>
        <option value='Download'>下载栏目</option>
      </select>
    </td>
  </tr>

  <tr>
    <td>排序ID：</td>
    <td height="35"><input name="sort" type="text" value="0" class="FormSmall" style="width: 50px;"> <span style="color:#F00; font-size:12px;">*必填</span></td>
  </tr>
  
  <tr>
    <td height="55" align="center">
    </td>
    <td height="55" align="left">
    <input type="submit" value="添加" class="bginput">&nbsp;&nbsp;
    <input name="reset" type="reset"  class="bginput" value="重置" />
    </td>
    </tr>
</table>
</DIV>
</form>
</body>
</html>