
<?php 
include ("./class/clsgiohang.php");
$p=new giohang();
?>
<?php 
if(isset($_REQUEST['layid']))
{
	$layid=$_REQUEST['layid'];
}
?>
<!DOCTYPE html>
<html lang="en">

<!-- Tieu Long Lanh Kute -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="utf-8">
<!--[if IE]>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<![endif]-->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">

<!-- Favicons Icon -->
<link rel="icon" href="http://demo.magikthemes.com/skin/frontend/base/default/favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="http://demo.magikthemes.com/skin/frontend/base/default/favicon.ico" type="image/x-icon" />
<title>Classic premium HTML5 &amp; CSS3 template</title>

<!-- Mobile Specific -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS Style -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.css" media="all">
<link rel="stylesheet" type="text/css" href="css/animate.css" media="all">
<link rel="stylesheet" type="text/css" href="css/revslider.css" >
<link rel="stylesheet" type="text/css" href="css/fancybox.css" >
<link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="css/owl.theme.css">
<link rel="stylesheet" href="css/flexslider.css" type="text/css">
<link rel="stylesheet" type="text/css" href="css/jquery.mobile-menu.css">
<link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css">
<link rel="stylesheet" type="text/css" href="css/style1.css" media="all">
<!-- Google Fonts -->
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Roboto:400,500,300,700,900' rel='stylesheet' type='text/css'>
</head>

<body class="cms-index-index">
<div style="background-color: rgb(119, 119, 119); opacity: 0.7; cursor: pointer; height: 1024px; display: block;" id="fancybox-overlay"></div>
<div style="width: 1190px; height: auto; top: 20%; left: 27%; display: block;" id="fancybox-wrap">
  <div id="fancybox-outer">
    <div style="border-width: 10px; width: 1170px; height: auto;" id="fancybox-content"> <a href="index.php" style="display: inline;"></a>
      <div style="width:auto;height:auto;overflow: auto;position:relative;">
        <div class="product-view">
          <div class="product-essential">
            
              <?php 
			  $p->quick_view("select*from sanPham where maSP='$layid' limit 1");
			  switch($_POST['nut'])
				  {
					  case'Add to Cart':
					  {
						  $soluong=$_REQUEST['qty'];
						  $sql = "insert into giohang(maSP,maKH,soluong) values ('$layid',1,'$soluong');";
						
						   
						  $sql2="update giohang set soluong=soluong+1 where maSP='$layid'";
						  $result = $p->themsuaxoa($sql);
						  $result1=$p->laygiatri("select maSP from giohang where maSP='$layid' limit 1");
						  $result2=$p->themsuaxoa($sql2);
						   if($layid==$result1)
						   {
							   if($result2==1)
							   {
								   echo " <script>alert('Thêm giỏ hàng thành công')</script>;";
							   }
						   }
						   else
						   {
							    if($result==1)
										 {
											 echo " <script>alert('Thêm giỏ hàng thành công')</script>;";
										 }
										 else
										 {
										
											  echo " <script>alert('Thêm giỏ hàng thất bại')</script>;";
										 }
						   }
						
						  break;
						
					  }
				  }
			  ?>
            
          </div>
        </div>
        <!--product-view--> 
        
      </div>
    </div>
    <a style="display: inline;" id="fancybox-close" href="index.php"></a> </div>
</div>

<!-- JavaScript --> 
<script type="text/javascript" src="js/jquery.min.js"></script> 
<script type="text/javascript" src="js/bootstrap.min.js"></script> 
<script type="text/javascript" src="js/parallax.js"></script> 
<script type="text/javascript" src="js/common.js"></script> 
<script type="text/javascript" src="js/owl.carousel.min.js"></script> 
<script type="text/javascript" src="js/jquery.flexslider.js"></script> 
<script type="text/javascript" src="js/jquery.mobile-menu.min.js"></script> 
<script type="text/javascript" src="js/cloud-zoom.js"></script>
</body>

<!-- Tieu Long Lanh Kute -->
</html>
