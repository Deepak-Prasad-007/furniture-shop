<?php
$msg="";
if($_POST["submit"])
{
    $t1=$_POST["t1"];
    $t2=$_POST["t2"];
    $t3=$_POST["t3"];
    $t4=$_POST["t4"];
    
$db=mysql_connect("localhost","root","");
mysql_select_db("furniture",$db);
mysql_query("insert into contact values('$t1','$t2','$t3','$t4')",$db);
mysql_close();
$msg="<span style='color:yellow'>Record Inserted Successfully...</span>";
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>FURNITURE SHOP</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/coin-slider.css" />
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/droid_sans_400-droid_sans_700.font.js"></script>
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/coin-slider.min.js"></script>
</head>
<body>
<div class="main">
  <div class="header">
    <div class="header_resize">
      <div class="menu_nav">
        <ul>
          <li class="active"><a href="home.php"><span>HOME</span></a></li>
          <li><a href="feedback.php"><span>FEEDBACK</span></a></li>
          <li><a href="login.php"><span>LOGIN</span></a></li>
          <li><a href="contact.php"><span>CONTACT</span></a></li>
          
          
         </ul>
      </div>
      <div class="clr"></div>
      <div class="searchform">
        
      </div>
      <div class="logo">
        <h1><a href="index.html">CONTACT  FORM<span></span> </a></h1>
      </div>
      <div class="clr"></div>
      <div class="slider">
        
                 
                        <form action="contact.php" method="post" id="myform" >
                            <table >
			  <tr>
                                <td>Name</td>
                                <td><input type="text" name ="t1"></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td><input type="text" name ="t2"></td>
                            </tr>
                             <tr>
                                <td>Phone_No</td>
                                <td><input type="text" name ="t3"></td>
                            </tr>
                             <tr>
                                <td>Message</td>
                                <td><input type="text" name ="t4"></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><input type="submit" name="submit" value="Submit"></td>
                           </tr>
                      </table>
		</form>
         <?php echo $msg?>     
          <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br> <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br> <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br> <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br> <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
       <script>
var validator=new Validator("myform");
validator.addValidation("t1","req","Please Enter Loginid");
</script> 
                                                                                                                                                                                                        <div class="clr"></div>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <div class="article">
            
          <div class="clr"></div>
          
          <div class="post_content">

          
           
          </div>
          <div class="clr"></div>
        </div>
       
           <div class="article">
          <div class="clr"></div>
          
          <div class="post_content">
            
          </div>
          <div class="clr"></div>
        </div>
        
      </div>
      <div class="sidebar">
        <div class="gadget">
            
          <div class="clr"></div>
          
        </div>
        <div class="gadget">
          
          <div class="clr"></div>
         
        </div>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="fbg">   
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="footer">
    <div class="footer_resize">
     
      <div style="clear:both;"></div>
    </div>
  </div>
</div>   
</body>
</html>

