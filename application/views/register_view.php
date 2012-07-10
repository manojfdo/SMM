<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<base href="http://localhost/SMM/img/" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- TemplateBeginEditable name="doctitle" -->
<title>Untitled Document</title>
<!-- TemplateEndEditable -->
<!-- TemplateBeginEditable name="head" -->
<!-- TemplateEndEditable -->

<script type="text/javascript">
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
</script>
<link rel="stylesheet" href="http://localhost/SMM/css/style.css" type="text/css" media="screen" />
<link rel="stylesheet" href="http://localhost/SMM/css/slide.css" type="text/css" media="screen" />
<!--Register Form Disign Stylesheet-->
<link rel="stylesheet" href="http://localhost/SMM/css/rgform.css" type="text/css" media="screen" />
<!-- jQuery - the core -->
	<script src="http://localhost/SMM/js/jquery-1.3.2.min.js" type="text/javascript"></script>
	<!-- Sliding effect -->
	<script src="http://localhost/SMM/js/slide.js" type="text/javascript"></script>
    <!--Country List Auto Loder-->
    <script src="http://localhost/SMM/js/countries3.js" type="text/javascript"></script>
</head>

<body style="margin:0; padding:0;" onload="MM_preloadImages('home_over.png','classifieds_over.png','myaccount_over.png')">
<!-- Panel -->
<div id="toppanel">
	<div id="panel">
		<div class="content clearfix">
			<div class="left">
				<h1>Welcome to SellmyMobile</h1>
				<h2>Best place for your old mobile</h2>		
				<p class="grey">Place your Mobile Classified Ad here for free of charge.</p>
				<h2>Classifieds Dedicaded For Mobiles</h2>
				<p class="grey">A unique design &amp; details that support needs of second hand mobile market, in Sri Lanka. </p>
			</div>
			<div class="left">
				<!-- Login Form -->
				<form class="clearfix" action="#" method="post">
					<h1>Member Login</h1>
					<label class="grey" for="log">Username:</label>
					<input class="field" type="text" name="log" id="log" value="" size="23" />
					<label class="grey" for="pwd">Password:</label>
					<input class="field" type="password" name="pwd" id="pwd" size="23" />
	            	<label><input name="rememberme" id="rememberme" type="checkbox" checked="checked" value="forever" /> &nbsp;Remember me</label>
        			<div class="clear"></div>
					<input type="submit" name="submit" value="Login" class="bt_login" />
					<a class="lost-pwd" href="#">Lost your password?</a>
				</form>
			</div>
			<div class="left right">			
				<!-- Register Form -->
				<form action="<?php echo base_url()?>/register" method="post">
					<h1>Not a member yet? Sign Up!</h1>				
					<label class="grey" for="signup">Username:</label>
					<input class="field" type="text" name="signup" id="signup" value="" size="23" />
					<label class="grey" for="email">Email:</label>
					<input class="field" type="text" name="email" id="email" size="23" />
					<label>A password will be e-mailed to you.</label>
					<input type="submit" name="submit" value="Register" class="bt_register" />
				</form>
			</div>
		</div>
</div> <!-- /login -->	

	<!-- The tab on top -->	
	<div class="tab">
		<ul class="login">
			<li class="left">&nbsp;</li>
			<li>Hello Guest!</li>
			<li class="sep">|</li>
			<li id="toggle">
			  <a id="open" class="open" href="http://localhost/SMM/#">Log In | Register</a>
			  <a id="close" style="display: none;" class="close" href="http://localhost/SMM/#">Close Panel</a>			
			</li>
			<li class="right">&nbsp;</li>
		</ul> 
	</div> <!-- / top -->
	
</div> <!--panel -->



<table width="100%" border="0" align="center" cellpadding="1" cellspacing="0">
  <tr>  </tr>
</table>
<span style="text-align: center"></span>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="30" colspan="2" align="center"><img src="top_border.png" width="100%" height="14" /></td>
  </tr>
  <tr>
    <td width="57%" rowspan="3" ><table width="400" border="0" align="left" cellpadding="0" cellspacing="0">
      <tr>
        <td>&nbsp;&nbsp;&nbsp;<img src="sell_my_mobile_logo.png" width="379" height="80" /></td>
      </tr>
    </table></td>
    <td width="43%" >&nbsp;</td>
  </tr>
  <tr>
    <td ><table width="400" border="0" align="right" cellpadding="0" cellspacing="0">
      <tr>
        <td width="100"><a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('home_navi','','home_over.png',1)"><img src="home_normal.png" alt="" name="home_navi" width="100" height="30" border="0" id="home_navi" /></a></td>
        <td width="155"><a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('class_navi','','classifieds_over.png',1)"><img src="classifieds_normal.png" alt="" name="class_navi" width="174" height="32" border="0" id="class_navi" /></a></td>
        <td width="145"><a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('myaccoubt_navi','','myaccount_over.png',1)"><img src="myaccount_normal.png" alt="" name="myaccoubt_navi" width="173" height="32" border="0" id="myaccoubt_navi" /></a></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td >&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="50%">&nbsp;</td>
        <td width="800"><!-- TemplateBeginEditable name="Body" -->Body have to be not more than 800px<!-- TemplateEndEditable --></td>
        <td width="50%">&nbsp;</td>
      </tr>
      <tr>
        <td bgcolor="#CCCCCC"><img src="footer_line.png" alt="" width="100%" height="5" hspace="0" vspace="0" /></td>
        <td bgcolor="#CCCCCC"  align="center"><img src="footer_line.png" width="800" height="5" hspace="0" vspace="0" /></td>
        <td bgcolor="#CCCCCC"><img src="footer_line.png" alt="" width="100%" height="5" hspace="0" vspace="0" /></td>
      </tr>
      <tr>
        <td bgcolor="#272727">&nbsp;</td>
        <td width="800" bgcolor="#272727"  align="center"><p style="font-weight:bold; color:#FFF">Sell My Mobile<br />
          National Institute Of Busniness Management - Higher Diploma In Computer Based Information Systems 11.1</p></td>
        <td bgcolor="#272727">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
</table>

<form class="reg" action="" style="width:600px" method="post">
		<p>Please complete the form below.</p>
		<fieldset class="login">
			<legend>Login Details</legend>
				<div>
					<label class="reg" for="username">User Name<label class="m">*</label><span class="small">Min.size??chars and 			 					Max.siz??chars</span></label> 
                	<input type="text" id="username" name="username">
				</div>
				<div>
					<label class="reg" for="password">Password<label class="m">*</label><span class="small">Min.size??chars and  	   					Max.siz?chars?</span></label>
                	<input type="password" id="password" name="password">
				</div>
				<div>
					<label class="reg" for="password2">Retype Password<label class="m">*</label><span class="small">Min.size??chars   					and Max.siz??chars</span>				 					</label>
                	<input type="password" id="password2" name="password2">
				</div>
		</fieldset>
		<fieldset class="personal">
			<legend>User Details</legend>
				<div>
					<label class="reg" for="firstname">First Name<label class="m">*</label><span class="small">Add Your First Name
                    </span></label>
                 	<input type="text" id="firstname" name="firstname">
				</div>
				<div>
					<label class="reg" for="lastname">Last Name<label class="m">*</label><span class="small">Add Your Last Name
                    </span></label>
                 	<input type="text" id="lastname" name="lastname">
				</div>
				<div class="radio">
				<fieldset>
					<legend><span>Gender<label class="m">*</label></span></legend>
						<div>
							<input type="radio" id="male" name="gender" value="male"> <label for="male">Male</label>
						</div>
						<div>
							<input type="radio" id="female" name="gender" value="female"> <label for="female">Female</label>
						</div>
				</fieldset>
				</div>
	<!--		<div class="date">
				<fieldset>
					<legend><span>Date of Birth</span></legend>
					<div>
						<label for="day">Day</label>
						<select id="day" name="dob_day">
							<option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option>
						</select>
					</div>
					<div>
						<label for="month">Month</label>
						<select id="month" name="dob_month">
							<option value="1">January</option><option value="2">February</option><option value="3">March</option><option value="4">April</option><option value="5">May</option><option value="6">June</option><option value="7">July</option><option value="8">August</option><option value="9">September</option><option value="10">October</option><option value="11">November</option><option value="12">December</option>
						</select>
					</div>
					<div>
						<label for="year">Year</label>
						<select id="year" name="bod_year">
							<option value="2004">2004</option><option value="2005">2005</option><option value="2006">2006</option><option value="2007">2007</option><option value="2008">2008</option>
						</select>
					</div>
				</fieldset>
			</div>-->
            	<div>
					<label class="reg" for="dob">Date of Birth<label class="m">*</label><span class="small">dd/mm/yyyy</span></label> 
                	<input type="text" id="dob" name="dob">
				</div>
            	<div>
					<label class="reg" for="address">Address<label class="m">*</label></label> 
                	<input type="text" id="add" name="add">
				</div>
            	<div>
					<label class="reg" for="city">City<label class="m">*</label></label> 
                	<input type="text" id="city" name="city">
				</div>
           		<div>
            		<label class="reg" for="state">Select Country<label class="m">*</label></label> 
            		<select onchange="print_state('state',this.selectedIndex);" id="country" name = "country"></select>
					<script language="javascript">print_country("country")</script>
            	</div>
				<div>
					<label class="reg" for="state">City/District/State<label class="m">*</label></label>
                    <select name ="state" id = "state"></select>
				</div>
            	<div>
					<label class="reg" for="zip">Zip Code<label class="m">*</label></label> 
                	<input type="text" id="zip" name="zip">
				</div>
		</fieldset>
		<fieldset class="contact">
			<legend>Contact Details</legend>
             	<div>
					<label class="reg" for="gphone">General Phone Number<label class="m"></label></label> 
                	<input type="text" id="gphone" name="gphone">
				</div>
            	<div>
					<label class="reg" for="mphone">Mobile Phone Number<label class="m">*</label></label> 
                	<input type="text" id="mphone" name="mphone">
				</div>
				<div>
					<label class="reg" for="email">Email<label class="m">*</label><span class="small">Add a valid address</span></label>
                	<input type="text" id="email" name="email" class="email">
				</div>
            	<div>
					<label class="reg" for="web">Web Site<label class="m"></label></label> 
                	<input type="text" id="web" name="web">
				</div>
		</fieldset>
				<div><button type="submit" id="submit-go">Submit</button></div>
</form>

</body>
</html>
