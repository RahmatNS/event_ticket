<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="">
<head>
			<meta name="keywords" content=" " />
			<meta name="description" content=" " />
			<meta charset="utf-8" />
			<link rel="stylesheet" href="style.css: " />
			<script type="text/javascript" src="<?php echo base_url('asset/bootstrap/js/bootstrap.js');?>"></script>
			<link href="<?php echo base_url();?>css/bootstrap-responsive.min.css" rel="stylesheet">
			<link href="<?php echo base_url();?>assets/css/style-admin.css" rel="stylesheet">
			<style type="text/css">
			@media only screen and (min-device-width : 320px) and (max-device-width : 480px) {.background1{background-color:orange;background-size:7% 7%;background-image:url('<?php echo base_url(); ?>images/faviconpimpi.png');background-repeat:repeat}#header{background-size:1% 1%;background-image:url('<?php echo base_url();?>images/header-admin.png');background-repeat:repeat-x}.admin-background{height:65pt;background-color:rgb(245,245,245);background-size:5pt 65pt;background-image:url('<?php echo base_url();?>images/header-admin.png');background-position: top;background-repeat: repeat-x}.admin-footer{background-image:url('<?php echo base_url(); ?>images/footer-admin.png');background-repeat:repeat-x;bottom:0;width:100%;text-align:center;color:black;margin-top:82pt}.admin-logo{background: orange url("<?php echo base_url();?>images/PIMPI2013.png") no-repeat}}
			@media only screen and (min-width : 321px) {.background1{background-color:orange;background-size:7% 7%;background-image:url('<?php echo base_url(); ?>images/faviconpimpi.png');background-repeat:repeat}#header{background-size:1% 1%;background-image:url('<?php echo base_url();?>images/header-admin.png');background-repeat:repeat-x}.admin-background{height:65pt;background-color:rgb(245,245,245);background-size:5pt 65pt;background-image:url('<?php echo base_url();?>images/header-admin.png');background-position: top;background-repeat: repeat-x}.admin-footer{background-image:url('<?php echo base_url(); ?>images/footer-admin.png');background-repeat:repeat-x;bottom:0;width:100%;text-align:center;color:black;margin-top:82pt}.admin-logo{background: orange url("<?php echo base_url();?>images/PIMPI2013.png") no-repeat}}
			@media only screen and (max-width : 320px) {.background1{background-color:orange;background-size:7% 7%;background-image:url('<?php echo base_url(); ?>images/faviconpimpi.png');background-repeat:repeat}#header{background-size:1% 1%;background-image:url('<?php echo base_url();?>images/header-admin.png');background-repeat:repeat-x}.admin-background{height:65pt;background-color:rgb(245,245,245);background-size:5pt 65pt;background-image:url('<?php echo base_url();?>images/header-admin.png');background-position: top;background-repeat: repeat-x}.admin-footer{background-image:url('<?php echo base_url(); ?>images/footer-admin.png');background-repeat:repeat-x;bottom:0;width:100%;text-align:center;color:black;margin-top:82pt}.admin-logo{background: orange url("<?php echo base_url();?>images/PIMPI2013.png") no-repeat}}
			@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) {.background1{background-color:orange;background-size:7% 7%;background-image:url('<?php echo base_url(); ?>images/faviconpimpi.png');background-repeat:repeat}#header{background-size:1% 1%;background-image:url('<?php echo base_url();?>images/header-admin.png');background-repeat:repeat-x}.admin-background{height:65pt;background-color:rgb(245,245,245);background-size:5pt 65pt;background-image:url('<?php echo base_url();?>images/header-admin.png');background-position: top;background-repeat: repeat-x}.admin-footer{background-image:url('<?php echo base_url(); ?>images/footer-admin.png');background-repeat:repeat-x;bottom:0;width:100%;text-align:center;color:black;margin-top:82pt}.admin-logo{background: orange url("<?php echo base_url();?>images/PIMPI2013.png") no-repeat}}
			@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : landscape) {.background1{background-color:orange;background-size:7% 7%;background-image:url('<?php echo base_url(); ?>images/faviconpimpi.png');background-repeat:repeat}#header{background-size:1% 1%;background-image:url('<?php echo base_url();?>images/header-admin.png');background-repeat:repeat-x}.admin-background{height:65pt;background-color:rgb(245,245,245);background-size:5pt 65pt;background-image:url('<?php echo base_url();?>images/header-admin.png');background-position: top;background-repeat: repeat-x}.admin-footer{background-image:url('<?php echo base_url(); ?>images/footer-admin.png');background-repeat:repeat-x;bottom:0;width:100%;text-align:center;color:black;margin-top:82pt}.admin-logo{background: orange url("<?php echo base_url();?>images/PIMPI2013.png") no-repeat}}
			@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) {.background1{background-color:orange;background-size:7% 7%;background-image:url('<?php echo base_url(); ?>images/faviconpimpi.png');background-repeat:repeat}#header{background-size:1% 1%;background-image:url('<?php echo base_url();?>images/header-admin.png');background-repeat:repeat-x}.admin-background{height:65pt;background-color:rgb(245,245,245);background-size:5pt 65pt;background-image:url('<?php echo base_url();?>images/header-admin.png');background-position: top;background-repeat: repeat-x}.admin-footer{background-image:url('<?php echo base_url(); ?>images/footer-admin.png');background-repeat:repeat-x;bottom:0;width:100%;text-align:center;color:black;margin-top:82pt}.admin-logo{background: orange url("<?php echo base_url();?>images/PIMPI2013.png") no-repeat}}
			@media only screen and (min-width : 1224px) {.background1{background-color:orange;background-size:7% 7%;background-image:url('<?php echo base_url(); ?>images/faviconpimpi.png');background-repeat:repeat}#header{background-size:1% 1%;background-image:url('<?php echo base_url();?>images/header-admin.png');background-repeat:repeat-x}.admin-background{height:65pt;background-color:rgb(245,245,245);background-size:5pt 65pt;background-image:url('<?php echo base_url();?>images/header-admin.png');background-position: top;background-repeat: repeat-x}.admin-footer{background-image:url('<?php echo base_url(); ?>images/footer-admin.png');background-repeat:repeat-x;bottom:0;width:100%;text-align:center;color:black;margin-top:82pt}.admin-logo{background: orange url("<?php echo base_url();?>images/PIMPI2013.png") no-repeat}}
			@media only screen and (min-width : 1824px) {.background1{background-color:orange;background-size:7% 7%;background-image:url('<?php echo base_url(); ?>images/faviconpimpi.png');background-repeat:repeat}#header{background-size:1% 1%;background-image:url('<?php echo base_url();?>images/header-admin.png');background-repeat:repeat-x}.admin-background{height:65pt;background-color:rgb(245,245,245);background-size:5pt 65pt;background-image:url('<?php echo base_url();?>images/header-admin.png');background-position: top;background-repeat: repeat-x}.admin-footer{background-image:url('<?php echo base_url(); ?>images/footer-admin.png');background-repeat:repeat-x;bottom:0;width:100%;text-align:center;color:black;margin-top:82pt}.admin-logo{background: orange url("<?php echo base_url();?>images/PIMPI2013.png") no-repeat}}
			@media only screen and (-webkit-min-device-pixel-ratio : 1.5), only screen and (min-device-pixel-ratio : 1.5) {.background1{background-color:orange;background-size:7% 7%;background-image:url('<?php echo base_url(); ?>images/faviconpimpi.png');background-repeat:repeat}#header{background-size:1% 1%;background-image:url('<?php echo base_url();?>images/header-admin.png');background-repeat:repeat-x}.admin-background{height:65pt;background-color:rgb(245,245,245);background-size:5pt 65pt;background-image:url('<?php echo base_url();?>images/header-admin.png');background-position: top;background-repeat: repeat-x}.admin-footer{background-image:url('<?php echo base_url(); ?>images/footer-admin.png');background-repeat:repeat-x;bottom:0;width:100%;text-align:center;color:black;margin-top:82pt}.admin-logo{background: orange url("<?php echo base_url();?>images/PIMPI2013.png") no-repeat}}
			</style>
<title>Formulir Seminar PIMPI</title>
</head>
<body class="admin-background">
<div class="logo"><img src="<?php echo base_url();?>images/PIMPI2013.png"  width="9%" height="7%" align="center"/> <img align="center" src="<?php echo base_url();?>images/admin.png" width="43%" height="20%"  /></div>
<div class="garis admin-margin">
<div class="form">
<br />
<div class="confirm-title">
<div class="admin-head"><b>Login</b></div>
<?php echo validation_errors(); ?>
<div style="color:red;font-size:10pt"><?php echo $this->session->flashdata('notification'); ?></div>
<?php echo form_open('admin/validation'); ?> 
<table width="100%">
<tr height="40px"><td width="35%">Username </td><td><input type="text" name="username" value="<?php echo set_value('username');?>"/></td></tr>
<tr height="40px"><td>Password </td><td><input type="password" name="password" value="<?php echo set_value('password');?>"/></td></tr>
<tr height="40px"><td> </td><td> <input type="submit" value="Login"/></td></tr>
</table>
<?php echo form_close(); ?>
</div>
</div><br />
</div>
<footer class="admin-footer">
<table  height="35px">
 <tr valign="center" ><td width="7%" align="right"></td><td width="40%" align="left"> </td><td width="40%" align="right"><div style="font-size:10pt">Copyright &copy; 2014 Scientist of Forces. All rights reserved </div></td></tr>
</table>
</footer>
</body>
</html>