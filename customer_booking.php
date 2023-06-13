<?php
$msg="";
if($_POST["submit"])
{
    $t1=$_POST["t1"];
    $t2=$_POST["t2"];
    $t3=$_POST["t3"];
    $t4=$_POST["t4"];
    $t5=$_POST["t5"];
    $t6=$_POST["t6"];
    $t7=$_POST["t7"];
    
$db=mysql_connect("localhost","root","");
mysql_select_db("furniture",$db);
mysql_query("insert into booking values('$t1','$t2','$t3','$t4','$t5','$t6','$t7')",$db);
mysql_close();
$GLOBALS["msg"]="<span style='color:yellow'>* Booking sucessfully..</span>";
}

    $db=mysql_connect("localhost","root","");
    mysql_select_db("furniture",$db);
    $c=0;
    $result=mysql_query("select count(bid) from booking",$db);
    while($row = mysql_fetch_Array($result))
    {
    $c=$row[0];
    }
    mysql_close();
    $c++;

    date_default_timezone_set("Asia/Calcutta");
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
        <form id="formsearch" name="formsearch" method="post" action="#" id="myform">
          <span>
          <input name="editbox_search" class="editbox_search" id="editbox_search" maxlength="80" value="Search our ste:" type="text" />
          </span>
          <input name="button_search" src="images/search.gif" class="button_search" type="image" />
        </form>
      </div>
      <div class="logo">
        <h1><a href="index.html">FURNITURE <span>                SHOP   </span> <small></small></a></h1>
      </div>
      <div class="clr"></div>
      <div class="slider">
        <div id="coin-slider"> <a href="#"><img src="images/4.jpeg" width="960" height="360" alt="" /><span> Tusce nec iaculis risus hasellus nec sem sed tellus malesuada porttitor. Mauris scelerisque feugiat ante in vulputate. Nam sit amet ullamcorper tortor. Phasellus posuere facilisis cursus. Nunc est lorem, dictum at scelerisque sit amet, faucibus et est. Proin mattis ipsum quis arcu aliquam molestie.</span></a> <a href="#"><img src="images/2.jpeg" width="960" height="360" alt="" /><span> Tusce nec iaculis risus hasellus nec sem sed tellus malesuada porttitor. Mauris scelerisque feugiat ante in vulputate. Nam sit amet ullamcorper tortor. Phasellus posuere facilisis cursus. Nunc est lorem, dictum at scelerisque sit amet, faucibus et est. Proin mattis ipsum quis arcu aliquam molestie.</span></a> <a href="#"><img src="images/3.jpeg" width="960" height="360" alt="" /><span> Tusce nec iaculis risus hasellus nec sem sed tellus malesuada porttitor. Mauris scelerisque feugiat ante in vulputate. Nam sit amet ullamcorper tortor. Phasellus posuere facilisis cursus. Nunc est lorem, dictum at scelerisque sit amet, faucibus et est. Proin mattis ipsum quis arcu aliquam molestie.</span></a> </div>
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

           <h2>Booking Detail</h2>
                        <form action="customer_booking.php" method="post">
                        <table >
                            <tr>
                                <td>Booking_ID</td>
                                <td><input type="text" name="t1" value="<?php echo $c;?>"></td>                       
                                <td>Booking_Date</td>
                                <td><input type="text" name="t2" value="<?php echo date("Y/m/d");?>"></td>
                            </tr>
                            <tr>
                    <td>FURNITURE_Type</td>
                    <td><select name="t3">
                            <option>Select</option>
                            <option>DINNING TABLE</option>
                             <option>Chair</option>
                              <option>Sofa set</option>
                               <option>Tea table</option>
                             <option>Bed</option>
                              <option>Dressing</option>
                               
                        </select></td>
                </tr> 
                            <tr>
                                <td>Furniture_Price</td>
                                <td><input type="text" id="t4" name="t4"></td>                            
                                <td> Customer_Name</td>
                                <td><input type="text" name="t5"></td>
                           </tr>
                            <tr>
                                
                                                           
                                <td>Address</td>
                                <td><input type="text" name="t6"></td>
                             </tr>
                            <tr>    
                                <td>Phone_No</td>
                                <td><input type="text" name="t7"></td>                           
                                
                             </tr>
                           
                                                  
                            <tr>
                                <td></td>
                                <td><input type="submit" name="submit" value="BOOK"></td>
                            </tr>
                        </table>                             
                    </form>
        <?php echo $msg?>  
           <script>
var validator=new Validator("myform");
validator.addValidation("t1","req","Please Enter Loginid");
</script> 
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


