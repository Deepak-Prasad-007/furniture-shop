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
                                <li><a href="admin_categories.php">CATRGORIES</a></li>
                                <li><a href="admin_furniture_order.php">Order</a></li>
                                <li><a href="admin_report.php">Report</a></li>
                                <li><a href="login.php">LOGOUT</a></li>
        </ul>
      </div>
      <div class="clr"></div>
      <div class="searchform">
        
      </div>
      <div class="logo">
        <h1><a href="index.html">ORDER  REPORT<span></span> </a></h1>
      </div>
      <div class="clr"></div>
      <div class="slider">
        <div class="well well-small">
             <h2></h2>
      
                                
     
                                
      <table width="600" border="1">
      <tr>
          <th>Action</th>
          <th>Order ID</th>
          <th>Order Date</th>
          <th>Categories</th>
          <th>Price</th> 
     </tr>
 <?php
$db=mysql_connect("localhost","root","");
mysql_select_db("furniture",$db);
$result=mysql_query("select * from order_detail",$db);
while($row = mysql_fetch_Array($result))
{
 ?>
  <tr>
  <td><a href="admin_edit_order.php?id=<?php echo $row[0]?>">Edit</a></td>    
  <td><?php echo $row[0]?></td>
  <td><?php echo $row[1]?></td>
  <td><?php echo $row[2]?></td>
  <td><?php echo $row[3]?></td>
  
  </tr>
<?php
}
mysql_close();
?>
</table>

  
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
