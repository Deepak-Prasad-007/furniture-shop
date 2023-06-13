<?php
    $msg=" ";
    if($_POST["submit"])
    {
        $id=$_POST["t1"];
        $pwd=$_POST["t2"];
        $uname=$_POST["t3"];
        $address=$_POST["t4"];
        $email=$_POST["t5"];
        $phone_no=$_POST["t6"];
        
        
        $con=mysql_connect("localhost","root","");
        mysql_select_db("wood_db",$con);
        mysql_query("insert into signup values('$id','$pwd',$uname','$address','$email','$phone_no')",$con);
        mysql_query("insert into login values('$id','$pwd','user')",$con);
        mysql_close();
        
        $msg="<span style='color:green'>Record Inserted Successfully....</span>";
        header("location: login.php");
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
        <form id="formsearch" name="formsearch" method="post" action="#">
          <span>
          <input name="editbox_search" class="editbox_search" id="editbox_search" maxlength="80" value="Search our ste:" type="text" />
          </span>
          <input name="button_search" src="images/search.gif" class="button_search" type="image" />
        </form>
      </div>
      <div class="logo">
        <h1><a href="index.html">FURNITURE<span>            SHOP       </span> <small></small></a></h1>
      </div>
      <div class="clr"></div>
      <div class="slider">
        <div id="coin-slider"> <a href="#"><img src="images/2.jpeg" width="960" height="360" alt="" /><span> Tusce nec iaculis risus hasellus nec sem sed tellus malesuada porttitor. Mauris scelerisque feugiat ante in vulputate. Nam sit amet ullamcorper tortor. Phasellus posuere facilisis cursus. Nunc est lorem, dictum at scelerisque sit amet, faucibus et est. Proin mattis ipsum quis arcu aliquam molestie.</span></a> <a href="#"><img src="images/1(1).jpeg" width="960" height="360" alt="" /><span> Tusce nec iaculis risus hasellus nec sem sed tellus malesuada porttitor. Mauris scelerisque feugiat ante in vulputate. Nam sit amet ullamcorper tortor. Phasellus posuere facilisis cursus. Nunc est lorem, dictum at scelerisque sit amet, faucibus et est. Proin mattis ipsum quis arcu aliquam molestie.</span></a> <a href="#"><img src="images/3.jpeg" width="960" height="360" alt="" /><span> Tusce nec iaculis risus hasellus nec sem sed tellus malesuada porttitor. Mauris scelerisque feugiat ante in vulputate. Nam sit amet ullamcorper tortor. Phasellus posuere facilisis cursus. Nunc est lorem, dictum at scelerisque sit amet, faucibus et est. Proin mattis ipsum quis arcu aliquam molestie.</span></a> </div>
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

           <h2>SIGNUP_DETAIL</h2>
               <form action="signup.php" id="myform" method="post">
                        <table>
                             <tr>
                                <td>LoginId</td>
                                <td><input type="text" id="t1" name="t1"></td>
                            </tr>
                            
                            <tr>
                                <td>Password</td>
                                <td><input type="password" id="t2" name="t2"></td>
                            </tr>
                            
                            <tr>
                                <td>User_Name</td>
                                <td><input type="text" id="t3" name="t3"></td>
                            </tr>
                            <tr>
                                <td>Address</td>
                                <td><input type="text" id="t4" name="t4"></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td><input type="text" id="t5" name="t5"></td>
                            </tr>
                            <tr>
                                <td>Phone_No</td>
                                <td><input type="text" id="t6" name="t6"></td>
                            </tr>
                           
                            <tr>
                                <td></td>
                                <td><input type="submit" name="submit" value="SUBMIT"></td>
                            </tr>
                        </table>                             
                    </form>
           <script>
var validator=new Validator("myform");
validator.addValidation("t1","req","Please Enter Loginid");
</script> 
           <?php
				if(isset($_GET["msg"]))
				{
					$msg=$_GET["msg"];
					if($msg=="0")
						echo "<span style='color:red'>* Sry! Account Not Created</span>";
					else if($msg=="2")
						echo "<span style='color:red'>* Phone NO Must Be 10 Digit</span>";
					else
						echo "<span style='color:green'> Account Created Successfully..</span>";
				}
			?>
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
  <script>
	var validator=new Validator("myform");

	//validator.addValidation("t1","req","Please Enter Field");
	validator.addValidation("name","alpha","Enter Only Char in User Name");
	validator.addValidation("phone","num","Enter Only No in Phone No");
	validator.addValidation("email","email","Invalid Email Format");
	</script>
  <div class="footer">
    <div class="footer_resize">
     
      <div style="clear:both;"></div>
    </div>
  </div>
</div>   
</body>
</html>

