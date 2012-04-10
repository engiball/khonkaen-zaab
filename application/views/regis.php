<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>ลงทะเบียน</title>
</head>s

<body align=center>
 
<!--<img src="{image_link}/header.jpg" width="980" height="91" />-->
<div align="center">

</div>
<br/><br/><br/><br/><br/><br/>
<?php echo form_open('home/resgister'); ?>
 <? $cutArr=array("<p>","</p>");?>

<table class="kkubook" width="40%" border="0" cellspacing="1" cellpadding="0" align=center >
  <tr>
    <td bgcolor="#999999"><table width="100%" border="0" cellspacing="1" cellpadding="0">
	     <tr>
        <th colspan="2" align="center" height="40px">สมัครสมาชิก</td>
    
      </tr>
      <tr>
      <tr>
        <td align="right" bgcolor="#FFFFFF">Username</td>
        <td  bgcolor="#FFFFFF" align=left><label for="textfield"></label>
          <input type="text" name="username" id="username" /><font color=red><?php echo str_replace($cutArr,"",form_error('username')); ?></font></td>
      </tr>
      <tr>
        <td align="right" bgcolor="#FFFFFF">Password</td>
        <td bgcolor="#FFFFFF" align=left ><input type="password" name="password" id="password" /><font color=red><?php  echo str_replace($cutArr,"",form_error('password')); ?></font></td>
      </tr>
      <tr>
        <td align="right" bgcolor="#FFFFFF">เพศ</td>
        <td bgcolor="#FFFFFF" align=left><input type="radio" name="sex" id="radio" value="male" checked />
          <label for="radio">ชาย
            <input type="radio" name="sex" id="radio2" value="female" />
          หญิง</label></td>
      </tr>
      <tr>
        <td align="right" bgcolor="#FFFFFF">Email</td>
        <td bgcolor="#FFFFFF" align=left><input type="text" name="email" id="email" /><font color=red><?php echo str_replace($cutArr,"",form_error('email')); ?></font></td>
      </tr>
<tr>
        <td align="right" bgcolor="#FFFFFF">เบอร์มือถือ</td>
        <td bgcolor="#FFFFFF" align=left><input type="text" name="mobile" id="mobile" /><font color=red><?php echo str_replace($cutArr,"",form_error('mobile'));?></font></td>
      </tr>
      <tr>
        <td align="right" bgcolor="#FFFFFF">province</td>
        <td bgcolor="#FFFFFF" align=left>
		<select name="province" id="province"> 
				<option value="--ไม่ระบุ">เลือกจังหวัด</option>
				
			{province}
			<option value="{PROVINCE_NAME}">{PROVINCE_NAME}</option>
			{/province}
		</select>
		</td>
      </tr>
      <tr>
        <td align="right" bgcolor="#FFFFFF" align=left>ที่อยู่</td>
        <td bgcolor="#FFFFFF" align=left ><TEXTAREA name="address" id="address" ></TEXTAREA><font color=red><?php echo str_replace($cutArr,"",form_error('address'));?></font></td>
      </tr>
      <tr>
        <td align=center bgcolor="#FFFFFF" colspan=2><input type=submit value='ลงทะเบียน' class="bSubmit"></td>
         
      </tr>

    </table></td>
  </tr>
</table>
</form>
<div align="center">
<? echo $error;?>
</div>


</body>
</html>
