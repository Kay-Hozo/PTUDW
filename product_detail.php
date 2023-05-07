<?php
session_start();
include("./class/clsgiohang.php");
include("./class/clsLogin.php");
$cart=new giohang();
$login = new login();
if(isset($_SESSION['id']))
{
	$maKH=$_SESSION['id'];
}
else
{
	$maKH=-1;
}
?>
<?php 
if(isset($_REQUEST['layid']))
{
	$layid=$_REQUEST['layid'];
}
?>
<?php 
include ("./class/clsStatusLogin.php");

$giaodien = new statusLogin();
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
<title>Chi tiết sản phẩm</title>

<!-- Mobile Specific -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS Style -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.css" media="all">
<link rel="stylesheet" type="text/css" href="css/animate.css" media="all">
<link rel="stylesheet" type="text/css" href="css/revslider.css" >
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

<body class="cms-index-index cms-home-page">
<div id="page"> 
    <!-- Header -->
	<?php
    	$giaodien->showHeader();
	?>
  <!-- end header -->
  <div class="mm-toggle-wrap">
    <div class="mm-toggle"><i class="icon-align-justify"></i><span class="mm-label">Menu</span> </div>
  </div>
  <!-- Navbar -->
  <nav>
    <div class="container">
      <div class="row">
        <div class="nav-inner col-lg-12">
          <ul id="nav" class="hidden-xs">
            <li class="level0 parent drop-menu "><a href="index.php"><span>Home</span></a>
            </li>
            <li class="level0 parent drop-menu"><a href="#"><span>Trang</span></a>
              <ul class="level1">
                <li class="level1 first"><a href="show_product.php"><span>Danh mục sản phẩm</span></a></li>
              
                <li class="level1 nav-10-4"><a href="shopping_cart.php"><span>Giỏ hàng</span></a></li>
               
                <li class="level1"><a href="login.php"><span>Đăng nhập</span></a></li>
                
                <li class="level1 first parent"><a href="blog.php"><span>Bài viết</span></a>
                 
                </li>
                <li class="level1"><a href="contact_us.html"><span>Liên hệ</span></a></li>
             
              </ul>
            </li>
             <li class="mega-menu"><a href="show_product.php" class="level-top"><span>Giới thiệu</span></a></li>
            <li class="mega-menu"><a href="show_product.php" class="level-top"><span>Book</span></a>
              <div style="left: 0px; display: none;" class="level0-wrapper dropdown-6col">
                <div class="container">
                  <div class="level0-wrapper2">
                    <div class="col-1">
                      <div class="nav-block nav-block-center">
                        <ul class="level0">
                          <li class="level1 nav-6-1 parent item"><a href="show_product.php" class=""><span>Sách giáo khoa</span></a>
                            
                          </li>
                          <li class="level1 nav-6-1 parent item"><a href="show_product.php"><span>Sách tham khảo</span></a>
                           
                          </li>
                          <li class="level1 nav-6-1 parent item"><a href="show_product.php"><span>Sách ngoại ngữ</span></a>
                           
                          </li>
                          <li class="level1 nav-6-1 parent item"><a href="show_product.php"><span>Sách thiếu nhi</span></a>
                           
                          </li>
                          <li class="level1 nav-6-1 parent item"><a href="show_product.php"><span>Sách kinh tế</span></a></li>
                        </ul>
            <li class="mega-menu"><a href="show_product.php" class="level-top"><span>Từ điển</span></a>
              
            </li>
           <li class="mega-menu"><a href="show_product.php" class="level-top"><span>Truyện tranh</span></a>
       
            </li>
         <li class="mega-menu"><a class="level-top" href="show_product.php"><span>Tiểu thuyết</span></a>
            
            </li>
            <li class="level0 nav-8 level-top"><a href="show_product.php" class="level-top"><span>Đời sống</span></a></li>
           
          </ul>
          <div class="menu_top">
            <div class="top-cart-contain pull-right"> 
              <!-- Top Cart -->
              <div class="mini-cart">
                <div data-toggle="dropdown" data-hover="dropdown" class="basket dropdown-toggle"><a href="shopping_cart.php"><span class="hidden-xs">Giỏ hàng(<?php echo $cart->laygiatri("select count(*) from giohang where maKH={$maKH}",$maKH);?>)</span></a></div>
                <div>
                  <div class="top-cart-content" style="display: none;">
                    <div class="block-subtitle">
                      <div class="top-subtotal"><?php echo $cart->laygiatri("select count(*) from giohang where maKH={$maKH}",$maKH);?> items, <span class="price"><?php echo $cart->subtotal("select*from giohang g left join sanPham s on g.maSP=s.maSP where maKH={$maKH}",$maKH);?>.000 đ</span> </div>
                      <!--top-subtotal-->
                      <div class="pull-right">
                        <button title="View Cart" class="view-cart" type="button"><a href="shopping_cart.php"><span>Xem giỏ hàng</span></a></button>
                      </div>
                      <!--pull-right--> 
                    </div>
                    <!--block-subtitle-->
                    <ul class="mini-products-list" id="cart-sidebar">
                      <?php
					  $cart->ouput_checkout("select*from giohang g left join sanPham s on g.maSP=s.maSP where maKH={$maKH}",$maKH); 
					  ?>
                   
                    <!--actions--> 
                  </div>
                </div>
              </div>
              <!-- Top Cart -->
              <div id="ajaxconfig_info" style="display:none"><a href="#/"></a>
                <input value="" type="hidden">
                <input id="enable_module" value="1" type="hidden">
                <input class="effect_to_cart" value="1" type="hidden">
                <input class="title_shopping_cart" value="Go to shopping cart" type="hidden">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </nav>


  <!-- end nav --> 
  <!-- Breadcrumbs -->
  <div class="breadcrumbs bounceInUp animated">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <ul>
            <li class="home"> <a title="Go to Home Page" href="index.php">Home</a><span>» </span></li>
            <li class=""> <a title="Go to Home Page" href="show_product.php">Book</a><span>» </span></li>
            
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- Breadcrumbs End --> 
  <!-- Main Container -->
  <div class="main-container col1-layout">
    <div class="main container">
    <div class="col-main">
      <div class="row">
        <div class="product-view">
        <!-- <div class="product-essential">
            <form action="#" method="post" id="product_addtocart_form">
              <input name="form_key" value="6UbXroakyQlbfQzK" type="hidden">-->
              <?php
			    $cart->chitietsp("select* from sanPham s join tacGia t on s.maTacGia=t.maTG where s.maSP='$layid' limit 1");
				
				switch($_POST['nut'])
				  {
					  case'Add to Cart':
					  {
						  $soluong=$_REQUEST['qty'];
						  $link=$cart->addtocart();
						  $sql="select*from giohang where maSP='$layid' and maKH = '{$_SESSION['id']}' LIMIT 1";
						  $result=mysql_query($sql,$link);
						  $i=mysql_num_rows($result);
						   
						  if($i>0)
						  {
							  $row=mysql_fetch_array($result);
							  $sql1="update giohang set soluong = soluong + $soluong where maSP='$layid' and maKH = '{$_SESSION['id']}'";
							  if(mysql_query($sql1,$link))
							  {
								  echo " <script>alert('Cập nhật giỏ hàng thành công')</script>;";
								   echo '<script language="javascript">
										window.location="./product_detail.php?layid='.$layid.'";
										  </script>';
								  
							  }
							  else
							  {
								  echo " <script>alert('Cập nhật giỏ hàng thất bại')</script>;";
								  echo '<script language="javascript">
										window.location="./product_detail.php?layid='.$layid.'";
										  </script>';
							  }
							  
						  }
						  else
						  {
							  $sql2="insert into giohang(maKH,maSP,soluong) values ('{$_SESSION['id']}','$layid','$soluong')";
							  if(mysql_query($sql2,$link))
							  {
								  echo " <script>alert('Thêm giỏ hàng thành công')</script>;";
								  echo '<script language="javascript">
										window.location="./product_detail.php?layid='.$layid.'";
										  </script>';
								  
							  }
							  else
							  {
								  echo " <script>alert('Thêm giỏ hàng thất bại')</script>;";
								  echo '<script language="javascript">
										window.location="./product_detail.php?layid='.$layid.'";
										  </script>';
							  }
							  

						  }
						  
						   
						

						  						
						  break;
						
					  }
				  }
			  ?>
            
                <div class="tab-pane fade" id="reviews_tabs">
                  <div class="box-collateral box-reviews" id="customer-reviews">
                    <div class="box-reviews1">
                      <div class="form-add">
                        <form id="review-form" method="post">
                          <h3>Viết đánh giá của bạn</h3>
                          <fieldset>
                            <table id="product-review-table" class="data-table">
                              
                              <thead>
                                <tr class="first last">
                                  <th>&nbsp;</th>
                                  <th><span class="nobr">1 *</span></th>
                                  <th><span class="nobr">2 *</span></th>
                                  <th><span class="nobr">3 *</span></th>
                                  <th><span class="nobr">4 *</span></th>
                                  <th><span class="nobr">5 *</span></th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr class="first odd">
                                  <th>Chất lượng</th>
                                  <td class="value"><input type="radio" class="radio" value="1" name="ratings"></td>
                                  <td class="value"><input type="radio" class="radio" value="2" name="ratings"></td>
                                  <td class="value"><input type="radio" class="radio" value="3" name="ratings"></td>
                                  <td class="value"><input type="radio" class="radio" value="4" name="ratings"></td>
                                  <td class="value last"><input type="radio" class="radio" value="5" name="ratings"></td>
                                </tr>
                              </tbody>
                            </table>
                            <input type="hidden" value="" class="validate-rating" name="validate_rating">
                            <div class="review2">
                              <ul>
                                <li>
                                  <label class="required label-wide" for="review_field">Bạn đánh giá sản phẩm này thế nào?<em>*</em></label>
                                  <div class="input-box">
                                    <textarea rows="2" cols="10" id="review_field" name="txtDanhGia"></textarea>
                                  </div>
                                </li>
                              </ul>
                              <div class="buttons-set">
                                <button class="button submit" title="Submit Review" value="Đánh giá" name="btn" type="submit"><span>Gửi đánh giá</span></button>
                              </div>
                            </div>
                          </fieldset>
                        </form>
                        <?php
                          $btn = $_REQUEST['btn'];
                          switch($btn)
                          {
                            case "Đánh giá":
                            {
                              if(isset($_SESSION["id"]) && isset($_SESSION["user"]) && isset($_SESSION["pass"]) && isset($_SESSION["ten"]) && isset($_SESSION["quyen"]))
                              {
                                $login->confirmLogin($_SESSION["id"], $_SESSION["user"], $_SESSION["pass"], $_SESSION["ten"], $_SESSION["quyen"]);
                              }
                              else
                              {
                                echo "<script> window.location.replace('./login.php')</script> ";	
                              }

                              $danhGia = $_REQUEST['txtDanhGia'];
                              $sao = $_REQUEST['ratings'];

                              $cart->addComment($layid, $_SESSION['id'], $danhGia, $sao);
                              break;
                            }

                          }
                        ?>
                      </div>
                    </div>
                    <div class="box-reviews2">
                      <h3>Khách hàng đánh giá</h3>
                      <div class="box visible">
                        <?php
                           $cart->showComment("SELECT tk.ho, tk.ten, bl.thoiGianBL as thoiGianBL, bl.danhGia, bl.noiDung
                           FROM binhLuan bl 
                           LEFT JOIN sanPham s ON s.maSP = bl.maSanPham 
                           LEFT JOIN tacGia t ON s.maTacGia = t.maTG 
                           LEFT JOIN taiKhoan tk ON bl.maTK = tk.maTK 
                           where s.maSP= {$layid}");
                        ?>
                      </div>
                    </div>
                    <div class="clear"></div>
                  </div>
                </div>
                
              </div>
            </div>
          </div>
          <div class="related-slider col-lg-12 col-xs-12 bounceInDown animated">
            <div class="slider-items-products">
              <div class="slider-items-products">
              <div class="new_title center">
        <h2>Sản phẩm tương tự</h2>
      </div>
                  
                  <div id="related-products-slider" class="product-flexslider hidden-buttons">
                    <div class="slider-items slider-width-col4 products-grid">
                    <?php
					$cart->xuatsp("select * from sanPham order by maSP asc limit 8"); 
					 
					?>
           
            
          </div>
                  </div>
           
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  <!-- Main Container End --> 
  
  <!-- Upsell Product Slider -->
  <section class="upsell-pro bounceInUp animated">
    <div class="container">
      <div class="slider-items-products">
        <div class="new_title center">
          <h2>Sản phẩm mới</h2>
        </div>
        <div id="upsell-products-slider" class="product-flexslider hidden-buttons">
          <div class="slider-items slider-width-col4 products-grid">
             <?php
					$cart->xuatsp("select * from sanPham order by maSP desc limit 8"); 
					?>
            <!-- End Item --> 
            
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Upsell Product Slider End --> 
  <div class="top-banner-section wow bounceInUp animated">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-sm-3 col-xs-6">
          <div class="col add-banner1">
          <div class="top-b-text"></div></div>
        </div>
        <div class="col-lg-3 col-sm-3 col-xs-6">
          <div class="col free-shipping"></div>
        </div>
        <div class="col-lg-3 col-sm-3 col-xs-6">
        <div class="col add-banner2">
          <div class="top-b-text"></div>
          </div>
                  
          
          
        </div>
        <div class="col-lg-3 col-sm-3 col-xs-6">
          <div class="col last offer"></div>
        </div>
      </div>
    </div>
  </div>
 <!-- end banner section -->
  <div class="brand-logo">
    <div class="container">
      <div class="slider-items-products">
        <div id="brand-logo-slider" class="product-flexslider hidden-buttons">
          <div class="slider-items slider-width-col6">
            
            <!-- Item -->
            <div class="item"><a href="#"><img src="images/b-logo1.png" alt="Image"></a> </div>
            <!-- End Item --> 
            
            <!-- Item -->
            <div class="item"><a href="#"><img src="images/b-logo2.png" alt="Image"></a> </div>
            <!-- End Item --> 
            
            <!-- Item -->
            <div class="item"><a href="#"><img src="images/b-logo3.png" alt="Image"></a> </div>
            <!-- End Item --> 
            
            <!-- Item -->
            <div class="item"><a href="#"><img src="images/b-logo4.png" alt="Image"></a> </div>
            <!-- End Item --> 
            
            <!-- Item -->
            <div class="item"><a href="#"><img src="images/b-logo5.png" alt="Image"></a> </div>
            <!-- End Item --> 
            
            <!-- Item -->
            <div class="item"><a href="#"><img src="images/b-logo6.png" alt="Image"></a> </div>
            <!-- End Item --> 
            
            <!-- Item -->
            <div class="item"><a href="#"><img src="images/b-logo1.png" alt="Image"></a> </div>
            <!-- End Item --> 
            
            <!-- Item -->
            <div class="item"><a href="#"><img src="images/b-logo4.png" alt="Image"></a> </div>
            <!-- End Item --> 
            
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Footer -->

  <?php
  	$giaodien->showFooter();
  ?>

</div>
<div id="mobile-menu">
  <div class="mm-search">
    <form name="search">
      <div class="input-group">
        <div class="input-group-btn">
          <button class="btn-default" type="submit"><i class="icon-search"></i></button>
        </div>
        <input type="text" class="form-control simple" placeholder="Search ..." name="srch-term" id="srch-term">
      </div>
    </form>
  </div>
  <ul>
    <li> </li>
    <li>
      <div class="home"><a href="index.php"><i class="icon-home"></i>Home</a> </div>
    </li>
    <li><a href="#">Pages</a>
      <ul>
        <li><a href="show_product.php">Grid</a></li>
        <li> <a href="list.php">List</a></li>
        <li> <a href="product_detail.php">Product Detail</a></li>
        <li> <a href="shopping_cart.php">Shopping Cart</a></li>
        <li><a href="checkout.php">Checkout</a></li>
        <li> <a href="wishlist.html">Wishlist</a></li>
        <li> <a href="dashboard.html">Dashboard</a></li>
        <li> <a href="#">Multiple Addresses</a></li>
        <li> <a href="gioithieu.php">About us</a></li>
        <li><a href="compare.html">Compare</a></li>
 	   <li><a href="faq.html">FAQ</a></li>
        <li><a href="quick_view.php">Quick view</a></li>
        <li><a href="login.php">Login</a></li>
        <li><a href="blog.php">Blog</a>
          <ul>
            <li><a href="blog_detail.php">Blog Detail</a></li>
          </ul>
        </li>
        <li><a href="contact_us.html">Contact us</a></li>
        <li><a href="404error.html">404 Error Page</a></li>
      </ul>
    </li>
    <li><a href="show_product.php">Sách </a>
      <ul>
        <li> <a href="show_product.php" class="">Sách giáo khoa</a>
          
        </li>
        <li> <a href="show_product.php">Sách tham khảo</a>
         
        </li>
        <li> <a href="show_product.php">Sách ngoại ngữ</a>
         
        </li>
        <li> <a href="show_product.php">Sách thiếu nhi</a>
         
        </li>
        <li> <a href="show_product.php">Sách kinh tế</a>
          
        </li>
    
      </ul>
    </li>
    <li><a href="show_product.php">Truyện tranh</a>
    
      
    </li>
    <li><a href="show_product.php">Từ điển</a>
     
    </li>
    <li><a href="show_product.php">Tiểu thuyết</a>
      
    </li>
    <li><a href="show_product.php">Đời sống</a></li>
    <li><a href="contact_us.html">Contact Us</a></li>
  </ul>
</div>

<?php 
/*switch($_POST['nut'])
  {
	  case'Thêm vào giỏ hàng':
	  {
		  
		  $sql = "insert into giohang(maSP,maKH,soluong) values ('$layid',1,1);";
		
		  $result = $cart->themsuaxoa($sql);
		 
						 if($result==1)
						 {
							 echo " <script>alert('Thêm giỏ hàng thành công')</>;";
						 }
						 else
						 {
						
							  echo " <script>alert('Thêm giỏ hàng thất bại')</script>;";
						 }
			
		
		  break;
		
	  }
  }*/
?>
<!-- End Footer --> 
<!-- JavaScript --> 
<script>
  function increase() {
    var quantity = parseInt(document.getElementById('qty').value);
    quantity++;
    document.getElementById('qty').value = quantity;
  }

  function decrease() {
    var quantity = parseInt(document.getElementById('qty').value);
    if (quantity > 1) {
      quantity--;
      document.getElementById('qty').value = quantity;
    }
  }
</script>
<script type="text/javascript" src="js/jquery.min.js"></script> 
<script type="text/javascript" src="js/bootstrap.min.js"></script> 
<script type="text/javascript" src="js/parallax.js"></script> 
<script type="text/javascript" src="js/common.js"></script> 
<script type="text/javascript" src="js/owl.carousel.min.js"></script> 
<script type="text/javascript" src="js/jquery.flexslider.js"></script> 
<script type="text/javascript" src="js/jquery.mobile-menu.min.js"></script> 
<script type="text/javascript" src="js/cloud-zoom.js"></script>
<script type="text/javascript" src="js/product-detal.js"></script>
</body>

<!-- Tieu Long Lanh Kute -->
</html>