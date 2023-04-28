
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
<link rel="stylesheet" type="text/css" href="css/styles2.css">
<link rel="stylesheet" type="text/css" href="css/main.css">
<!-- Google Fonts -->
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Roboto:400,500,300,700,900' rel='stylesheet' type='text/css'>
</head>

<body>
<div class="content" >
    <div class="bg-dark">
    </div>
    <div class="upProduct-box">
        
        <form enctype='multipart/form-data' method='post'>
            <div class='form-group row'> 
              <h4 class="text-center">Bạn có chắc chắn xóa tất cả sản phẩm trong giỏ hàng không ?</h4>
            </div>
           
           <div class='form-group row'>
          <div class='col-sm-12 text-center'>
            <input type='submit' name='btndelete' id='btndelete' class='btn btn-primary' value='Có'>
             <input type='submit' name='btndelete' id='btndelete' class='btn btn-danger' value='Không'>
          </div>
        </div>
      </form>
      <?php
	  switch($_POST['btndelete'])
	  {
		  case'Có':
		  {
			  $sql="delete from giohang ";
			  $result=$p->themsuaxoa($sql);
			  if($result==1)
			  {
				   echo " <script>alert('Xóa sản phẩm thành công')</script>;";
				   echo '<script language="javascript">
						window.location="./shopping_cart.php";
						  </script>';
}
			  else
			  {
				   echo " <script>alert('Xóa sản phẩm thất bại')</script>;";
				   echo '<script language="javascript">
						window.location="./shopping_cart.php";
						  </script>';
			  }
			  break;
		  }
		  case'Không':
		  {
			  echo '<script language="javascript">
						window.location="./shopping_cart.php";
						  </script>';
			  break;
		  }
	  }
	  ?>
      <a style="display: inline;" id="fancybox-close" href="./shopping_cart.php"></a>
    </div>
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
