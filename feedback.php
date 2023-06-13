<?php
$msg="";
if($_POST["submit"])
{
    $t1=$_POST["t1"];
    $t2=$_POST["t2"];
   
    $db=mysql_connect("localhost","root","");
    mysql_select_db("furniture",$db);
    $c=0;
    $result=mysql_query("select count(sno) from feedback",$db);
    while($row = mysql_fetch_Array($result))
    {
    $c=$row[0];
    }
    mysql_close();
    $c++;
    
$db=mysql_connect("localhost","root","");
mysql_select_db("furniture",$db);
mysql_query("insert into feedback values($c,'$t1','$t2')",$db);
mysql_close();
$msg="<span style='color:yellow'>* Feedback Added sucessfully.....</span>";
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
        <h1><a href="index.html">FEED  BACK  DETAIL<span></span> </a></h1>
      </div>
      <div class="clr"></div>
      <div class="slider">
        
                 <form action="feedback.php" method="post" id="myform">
                        <table>
                            <tr>
                                <td>Customer Name</td>
                                <td><input type="text" name="t1"></td>
                            </tr>                            
                            <td></td>
                            
                            <tr>
                                <td>FeedBack</td>
                                        <td><input type="text" name="t2"></td>
                             </tr>                           
                             <tr>
                                <td></td>                                
                                <td><input type="submit" name="submit" value="SUBMIT"></td>
                            </tr>
                        </table>                             
                    </form>
           <?php echo $msg?>     
          <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <script>
var validator=new Validator("myform");
validator.addValidation("t1","req","Please Enter Loginid");
</script> 
     
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
