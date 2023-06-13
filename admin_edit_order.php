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
mysql_query("update order_detail set odate='$t2',categories='$t3',price='$t4' where oid=$t1",$db);
mysql_close();
header("location: admin_order_report.php");
$GLOBALS["msg"]="<span style='color:yellow'>* Order Updated sucessfully..</span>";
}

    $s1="";$s2="";$s3="";$s4="";
    $db=mysql_connect("localhost","root","");
    mysql_select_db("furniture",$db);
    $id=$_GET["id"];
    $result=mysql_query("select * from order_detail where oid='$id'",$db);
    while($row = mysql_fetch_Array($result))
    {
    $s1=$row[0];
    $s2=$row[1];
    $s3=$row[2];
    $s4=$row[3];
    
    }
    mysql_close();

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
          <li><a href="admin_change_pwd.php">Password</a></li>
                                <li><a href="admin_categories.php">CATEGORIES</a></li>
                                <li><a href="admin_furniture_order.php">Order</a></li>
                                <li><a href="admin_report.php">Report</a></li>
                                <li><a href="login.php">LOGOUT</a></li>
          
        </ul>
      </div>
      <div class="clr"></div>
      <div class="searchform">
        
      </div>
      <div class="logo">
        <h1><a href="index.html">BOOKING  DETAIL<span></span> </a></h1>
      </div>
      <div class="clr"></div>
      <div class="slider">
        <div class="well well-small">
             <h2></h2>
      
                       
                        <form action="admin_edit_booking.php" method="post" id="myform">
                        <table >
                            <tr>
                                <td>Booking_ID</td>
                                <td><input type="text" name="t1" value="<?php echo $s1;?>"></td>                       
                                <td>Booking_Date</td>
                                <td><input type="text" name="t2" value="<?php echo $s2;?>"></td>
                            </tr>
                            <tr>
                                <td>FURNITURE_Type</td>
                             <td><select name="t3">
                            <option>selet</option>
                            <option>Dinning table</option>
                             <option>chair</option>
                              <option>bed</option>
                               <option>sofa set</option>
                               <option>tea table</option>
                               <option>dressing</option>
                        </select></td>                    
                                
                            </tr>
                            <tr>
                                <td>Furniture_Price</td>
                                <td><input type="text" name="t4" value="<?php echo $s4;?>"></td>                            
                                <td> Customer_Name</td>
                                <td><input type="text" name="t5" value="<?php echo $s5;?>"></td>
                           </tr>
                            <tr>
                                                          
                                <td>Address</td>
                                <td><input type="text" name="t6" value="<?php echo $s6;?>"></td>
                             </tr>
                            <tr>    
                                <td>Phone_No</td>
                                <td><input type="text" name="t7" value="<?php echo $s7;?>"></td>                           
                                
                             </tr>
                                                 
                            <tr>
                                <td></td>
                                <td><input type="submit" name="submit" value="Edit Booking"></td>
                            </tr>
                        </table>                             
                    </form>
            <?php echo $msg?>            
				  </div>
				</li>
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