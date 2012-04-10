<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="<?echo base_url('stylesheet.css');?>" />
<title>ลงทะเบียน</title>
</head>

<body align=center>
 
<!--<img src="{image_link}/header.jpg" width="980" height="91" />-->
<div align="center">
<img src="<?echo base_url('images/header.jpg');?>" width="980" height="91" align="center" />
</div>
<br/><br/><br/><br/><br/><br/>
<?php echo form_open('register/re1'); ?>
 <? $cutArr=array("<p>","</p>");?>

<table class="kkubook" width="40%" border="0" cellspacing="1" cellpadding="0" align=center >
  <tr>
    <td bgcolor="#999999"><table width="100%" border="0" cellspacing="1" cellpadding="0">
	     <tr>
        <th colspan="2" align="center" height="40px">ลงทะเบียน</td>
    
      </tr>
      <tr>
      <tr>
        <td align="right" bgcolor="#FFFFFF">ชื่อ</td>
        <td  bgcolor="#FFFFFF" align=left><label for="textfield"></label>
          <input type="text" name="name" id="name" /><font color=red><?php echo str_replace($cutArr,"",form_error('name')); ?></font></td>
      </tr>
      <tr>
        <td align="right" bgcolor="#FFFFFF">นามสกุล</td>
        <td bgcolor="#FFFFFF" align=left ><input type="text" name="lname" id="lname" /><font color=red><?php  echo str_replace($cutArr,"",form_error('lname')); ?></font></td>
      </tr>
      <tr>
        <td align="right" bgcolor="#FFFFFF">เพศ</td>
        <td bgcolor="#FFFFFF" align=left><input type="radio" name="sex" id="radio" value="1" checked />
          <label for="radio">ชาย
            <input type="radio" name="sex" id="radio2" value="2" />
          หญิง</label></td>
      </tr>
      <tr>
        <td align="right" bgcolor="#FFFFFF">เลขที่บัตรประชาชน</td>
        <td bgcolor="#FFFFFF" align=left><input type="text" name="student_id" id="student_id" /><font color=red><?php echo str_replace($cutArr,"",form_error('student_id')); ?></font></td>
      </tr>
<tr>
        <td align="right" bgcolor="#FFFFFF">เบอร์มือถือ</td>
        <td bgcolor="#FFFFFF" align=left><input type="text" name="mobile" id="student_id" /><font color=red><?php echo str_replace($cutArr,"",form_error('mobile'));?></font></td>
      </tr>
      <tr>
        <td align="right" bgcolor="#FFFFFF">คณะ</td>
        <td bgcolor="#FFFFFF" align=left>
		<select name="fac" id="fac"> 
				<option value="--ไม่ระบุ">เลือกคณะ</option>
				<option value="คณะเทคโนโลยี">คณะเทคโนโลยี</option>
				<option value="คณะนิติศาสตร์">คณะนิติศาสตร์</option>
				<option value="คณะแพทยศาสตร์">คณะแพทยศาสตร์</option>
				<option value="คณะวิทยาศาสตร์">คณะวิทยาศาสตร์</option>
				<option value="คณะศึกษาศาสตร์">คณะศึกษาศาสตร์</option>
				<option value="คณะเกษตรศาสตร์">คณะเกษตรศาสตร์</option>
				<option value="คณะเภสัชศาสตร์">คณะเภสัชศาสตร์</option>
				<option value="คณะพยาบาลศาสตร์">คณะพยาบาลศาสตร์</option>
				<option value="วิทยาเขตหนองคาย">วิทยาเขตหนองคาย</option>
				<option value="คณะทันตแพทยศาสตร์">คณะทันตแพทยศาสตร์</option>
				<option value="คณะวิทยาการจัดการ">คณะวิทยาการจัดการ</option>
				<option value="คณะวิศวกรรมศาสตร์">คณะวิศวกรรมศาสตร์</option>
				<option value="คณะศิลปกรรมศาสตร์">คณะศิลปกรรมศาสตร์</option>
				<option value="คณะสัตวแพทยศาสตร์">คณะสัตวแพทยศาสตร์</option>
				<option value="คณะเทคนิคการแพทย์">คณะเทคนิคการแพทย์</option>
				<option value="คณะสาธารณสุขศาสตร์">คณะสาธารณสุขศาสตร์</option>
				<option value="คณะสถาปัตยกรรมศาสตร์">คณะสถาปัตยกรรมศาสตร์</option>
				<option value="วิทยาลัยการปกครองท้องถิ่น">วิทยาลัยการปกครองท้องถิ่น</option>
				<option value="คณะมนุษยศาสตร์และสังคมศาสตร์">คณะมนุษยศาสตร์และสังคมศาสตร์</option>
				<option value="วิทยาลัยบัณฑิตศึกษาการจัดการ">วิทยาลัยบัณฑิตศึกษาการจัดการ</option>
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
 <?
	 $this->load->view('footer');
 ?>
</div>
</body>
</html>
