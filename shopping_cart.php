﻿<?php 
include("./class/clsgiohang.php");
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
<link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="css/owl.theme.css">
<link rel="stylesheet" href="css/flexslider.css" type="text/css">
<link rel="stylesheet" type="text/css" href="css/jquery.mobile-menu.css">
<link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css">
<link rel="stylesheet" type="text/css" href="css/style1.css" media="all">
<!-- Google Fonts -->
<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,200italic,300,300italic,400,400italic,600,600italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Roboto:400,500,300,700,900' rel='stylesheet' type='text/css'>
</head>

<body class="cms-index-index cms-home-page">
<div id="page"> 
  <!-- Header -->
   <header>
    <div class="header-container">
      <div class="container">
        <div class="row">
          <div class="col-sm-3 col-xs-12"> 
            <!-- Header Logo -->
            <div class="logo"><a title="Magento Commerce" href="index.php"><img alt="Magento Commerce" src="images/logo/logo.png" style="height:150px;"></a></div>
            <!-- End Header Logo --> 
          </div>
          <div class="col-lg-9 col-xs-12 right_menu">
            <div class="toplinks"> 
              <!-- Default Welcome Message -->
              <div class="welcome-msg hidden-xs">Default welcome msg! </div>
              <!-- End Default Welcome Message -->
              <div class="links">
                <div class="myaccount"><a title="My Account" href="login.php"><span class="hidden-xs">Tài khoản</span></a></div>
                
                <div class="check"><a title="Checkout" href="checkout.html"><span class="hidden-xs">Thanh toán</span></a></div>
                <div class="demo"><a title="Blog" href="blog.html"><span class="hidden-xs">Bài viết</span></a></div>
                
                
                <div class="login"><a href="login.php"><span class="hidden-xs">Đăng nhập</span></a></div>
              </div>
              <!-- links --> 
            </div>
            
            <!-- Search-col -->
            <div class="search-box pull-right">
              <form action="http://htmldemo.magikcommerce.com/ecommerce/classic-html-template/version_1/cat" method="POST" id="search_mini_form" name="Categories">
                <input type="text" placeholder="Search entire store here..." value="Search" maxlength="70" name="search" id="search">
                <button type="button" class="search-btn-bg"><span class="glyphicon glyphicon-search"></span>&nbsp;</button>
              </form>
            </div>
            <!-- End Search-col --> 
            <!-- Header Language -->
            <div class="lang-curr">
              <div class="form-language">
                <ul class="lang">
                  <li class=""><a href="#" title="English"><img src="images/english.png" alt="English" /> <span>English</span></a></li>
                  <li class=""><a href="#" title="Francais"><img src="images/francais.png" alt="Francais" /> <span>francais</span></a></li>
                  <li class=""><a href="#" title="German"><img src="images/german.png" alt="German" /> <span>german</span></a></li>
                </ul>
              </div>
              <div class="form-currency">
                <ul class="currencies_list">
                  <li class=""><a class="" title="Dollar" href="#">$</a></li>
                  <li class=""><a class="" title="Euro" href="#">&euro;</a></li>
                  <li class=""><a class="" title="Pound" href="#">&pound;</a></li>
                </ul>
              </div>
            </div>
            
            <!-- End Header Currency --> 
          </div>
        </div>
      </div>
    </div>
  </header>
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
                <li class="level1 first"><a href="grid.php"><span>Danh mục sản phẩm</span></a></li>
             
                <li class="level1 nav-10-4"><a href="shopping_cart.php"><span>Giỏ hàng</span></a></li>
                <li class="level1 first parent"><a href="checkout.html"><span>Thanh toán</span></a>  </li>
              
                <li class="level1"><a href="login.php"><span>Đăng nhập</span></a></li>
                
                <li class="level1 first parent"><a href="blog.html"><span>Bài viết</span></a>
                 
                </li>
                <li class="level1"><a href="contact_us.html"><span>Liên hệ</span></a></li>
              
              </ul>
            </li>
             <li class="mega-menu"><a href="grid.php" class="level-top"><span>Giới thiệu</span></a></li>
            <li class="mega-menu"><a href="grid.php" class="level-top"><span>Book</span></a>
              <div style="left: 0px; display: none;" class="level0-wrapper dropdown-6col">
                <div class="container">
                  <div class="level0-wrapper2">
                    <div class="col-1">
                      <div class="nav-block nav-block-center">
                        <ul class="level0">
                          <li class="level1 nav-6-1 parent item"><a href="grid.php" class=""><span>Sách giáo khoa</span></a>
                            
                          </li>
                          <li class="level1 nav-6-1 parent item"><a href="grid.php"><span>Sách tham khảo</span></a>
                           
                          </li>
                          <li class="level1 nav-6-1 parent item"><a href="grid.php"><span>Sách ngoại ngữ</span></a>
                           
                          </li>
                          <li class="level1 nav-6-1 parent item"><a href="grid.php"><span>Sách thiếu nhi</span></a>
                            
                          </li>
                          <li class="level1 nav-6-1 parent item"><a href="grid.php"><span>Sách kinh tế</span></a>
                           
                          </li>
                          
                        </ul>
                      </div>
                    </div>
                    
            <li class="mega-menu"><a href="grid.php" class="level-top"><span>Từ điển</span></a>
              
            </li>
           <li class="mega-menu"><a href="grid.php" class="level-top"><span>Truyện tranh</span></a>
            
            </li>
         <li class="mega-menu"><a class="level-top" href="grid.php"><span>Tiểu thuyết</span></a>
            
            </li>
            <li class="level0 nav-8 level-top"><a href="grid.php" class="level-top"><span>Đời sống</span></a></li>
          
          </ul>
          <div class="menu_top">
            <div class="top-cart-contain pull-right"> 
              <!-- Top Cart -->
              <div class="mini-cart">
                <div data-toggle="dropdown" data-hover="dropdown" class="basket dropdown-toggle"><a href="shopping_cart.php"><span class="hidden-xs">Giỏ hàng(<?php echo $p->laygiatri("select count(*) from giohang");?>)</span></a></div>
                <div>
                  <div class="top-cart-content" style="display: none;">
                    <div class="block-subtitle">
                      <div class="top-subtotal"><?php echo $p->laygiatri("select count(*) from giohang");?>  items, <span class="price"><?php echo $p->subtotal("select*from giohang g left join sanPham s on g.maSP=s.maSP ");?>.000 đ</span> </div>
                      <!--top-subtotal-->
                      <div class="pull-right">
                        <button title="View Cart" class="view-cart" type="button"><a href="shopping_cart.php"><span>Xem giỏ hàng</span></a></button>
                      </div>
                      <!--pull-right--> 
                    </div>
                    <!--block-subtitle-->
                    <ul class="mini-products-list" id="cart-sidebar">
                      <?php
					  $p->ouput_checkout("select*from giohang g left join sanPham s on g.maSP=s.maSP"); 
					  ?>
                    </ul>
                    <div class="actions">
                      <button class="btn-checkout" title="Checkout" type="button"><a href="shopping_cart.php"><span style="color:white;">Thanh toán</span></a></button>
                    </div>
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
  
  <!-- Main Container -->
  <section class="main-container col1-layout wow bounceInUp animated">
    <div class="main container">
      <div class="col-main">
        <div class="cart">
          <div class="page-title">
            <h2>Giỏ hàng</h2>
          </div>
          <div class="table-responsive">
            <form method="post" action="#">
              <input type="hidden" value="Vwww7itR3zQFe86m" name="form_key">
              <fieldset>
                <table class="data-table cart-table" id="shopping-cart-table">
                  <thead>
                    <tr class="first last">
                      <th rowspan="1">&nbsp;</th>
                      <th rowspan="1"><span class="nobr">Tên sản phẩm</span></th>
                      <th rowspan="1" class="hidden-phone"></th>
                     <!-- <th rowspan="1" class="hidden-phone"><span class="nobr"></span></th>-->
                      <th colspan="1" class="a-center"><span class="nobr">Đơn giá</span></th>
                      <th class="a-center " rowspan="1">Số lượng</th>
                      <th colspan="1" class="a-center">Tổng tiền</th>
                      <th class="a-center" rowspan="1">&nbsp;</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr class="first last">
                      <td class="a-right last" colspan="8"><button onclick="setLocation('http://magento.magikthemes.com/magikClassic/womens.html')" class="button btn-continue" title="Continue Shopping" type="button"><span>tiếp tục mua sắm </span></button>
                        <button class="button btn-update" title="Update Cart" value="update_qty" name="update_cart_action" type="submit"><span>Xóa giỏ hàng</span></button>
                        <button id="empty_cart_button" class="button" title="Clear Cart" value="empty_cart" name="update_cart_action" type="submit"><span>cập nhật giỏ hàng</span></button></td>
                    </tr>
                  </tfoot>
                  <tbody>
                     <?php 
					 $sql="select * from giohang g left join sanPham s on g.maSP=s.maSP";
					 $p->load_DS_giohang($sql);
					 
					 switch($_REQUEST['nut'])
					 {
						 case'Xoa':
						 {
							 $sql1="DELETE FROM giohang WHERE maSP = '$layid'";
							 if($p->themsuaxoa($sql1)==1)
							 {
								 echo " <script>alert('Xóa sản phẩm  thành công')</script>;";
							 }
							 else
							 {
								 echo " <script>alert('Xóa thất bại')</script>;";
							 }
							 break;
						 }
					 }
					 ?>
                  </tbody>
                </table>
              </fieldset>
            </form>
          </div>
          <!-- BEGIN CART COLLATERALS -->
          <div class="cart-collaterals row">
            <div class="col-sm-4">
              <div class="shipping">
                <h3>Ước tính vận chuyển và thuế</h3>
                <div class="shipping-form">
                  <form id="shipping-zip-form" method="post" action="#">
                    <p>Nhập địa chỉ giao hàng</p>
                    <ul class="form-list">
                      <li>
                        <label class="required" for="country"><em>*</em>Quốc gia</label>
                        <div class="input-box">
                          <select title="Country" class="validate-select" id="country" name="country_id">
                            <option value="VN">Việt Nam</option>
                            <option value="AX">Anh</option>
                            
                          </select>
                        </div>
                      </li>
                      <li>
                        <label for="region_id">Tỉnh/Thành phố</label>
                        <div class="input-box">
                          <select title="State/Province" name="region_id" id="region_id">
                            <option value="">Vui lòng chọn tỉnh , thành phố</option>
                            <option value="1" title="Alabama">TP Hồ Chí Minh</option>
                            <option value="2" title="Alaska">Bến Tre</option>
                            <option value="3" title="American Samoa">Cần Thơ</option>
                            <option value="4" title="Arizona">Tiền Giang</option>
                            <option value="5" title="Arkansas">Hà Giang</option>
                            <option value="6" title="Armed Forces Africa">Bạc liêu</option>
                            <option value="7" title="Armed Forces Americas">Long An</option>
                            <option value="8" title="Armed Forces Canada">Sóc Trăng</option>
                            <option value="9" title="Armed Forces Europe">Đắc Lắc</option>
                            <option value="10" title="Armed Forces Middle East">Gia Lai</option>
                            <option value="11" title="Armed Forces Pacific">Kiên Giang</option>
                            <option value="12" title="California">Hậu Giang</option>
                            <option value="13" title="Colorado">An Giang</option>
                            <option value="14" title="Connecticut">Bạc Liêu</option>
                            <option value="15" title="Delaware">Cà Mau</option>
                            <option value="16" title="District of Columbia">Bình Định</option>
                            <option value="17" title="Federated States Of Micronesia">Đồng Nai</option>
                            <option value="18" title="Florida">Bình Dương</option>
                            <option value="19" title="Georgia">Trà Vinh</option>
                            <option value="20" title="Guam">Hậu Giang</option>
                            <option value="21" title="Hawaii">Ninh Bình</option>
                            <option value="22" title="Idaho">Đà Nẵng</option>
                            <option value="23" title="Illinois">Ninh Thuận</option>
                            <option value="24" title="Indiana">Bình Thuận</option>
                           
                          </select>
                          <input type="text" style="display:none;" class="input-text" title="State/Province" name="region" id="region">
                        </div>
                      </li>
                      <li>
                        <label for="postcode">Zip/Postal Code</label>
                        <div class="input-box">
                          <input type="text" name="estimate_postcode" id="postcode" class="input-text validate-postcode">
                        </div>
                      </li>
                    </ul>
                    <div class="buttons-set11">
                      <button class="button get-quote" title="Get a Quote" type="button"><span>Nhận báo giá</span></button>
                    </div>
                    <!--buttons-set11-->
                  </form>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="discount">
                <h3>Mã giảm giá </h3>
                <form method="post" action="#" id="discount-coupon-form">
                  <label for="coupon_code">Nhập mã giảm giá của bạn nếu có</label>
                  <input type="hidden" value="0" id="remove-coupone" name="remove">
                  <input type="text" name="coupon_code" id="coupon_code" class="input-text fullwidth">
                  <button value="Apply Coupon" class="button coupon " title="Apply Coupon" type="button"><span>Áp dụng phiếu giảm giá</span></button>
                </form>
              </div>
            </div>
            <div class="totals col-sm-4">
              <h3>Tổng cộng giỏ hàng</h3>
              <div class="inner">
                <table class="table shopping-cart-table-total" id="shopping-cart-totals-table">
                  
                 <?php 
				 $sql="select * from giohang g left join sanPham s on g.maSP=s.maSP";
				 $p->thanhtien_giohang($sql);
				 ?>
                </table>
                <ul class="checkout">
                  <li>
                    <button class="button btn-proceed-checkout" title="Proceed to Checkout" type="button"><span>Xác nhận thanh toán</span></button>
                  </li>
                
                  <li><a title="Checkout with Multiple Addresses" href="#">Thanh toán với nhiều địa chỉ</a> </li>
                 
                </ul>
              </div>
              <!--inner--> 
              
            </div>
          </div>
          
          <!--cart-collaterals--> 
          
        </div>
        <div class="crosssel wow bounceInUp animated">
          <div class="">
            <h2>Dựa trên lựa chọn của bạn,bạn có thể quan tâm đến các mục sau:</h2>
          </div>
          <div class="category-products">
            <ul class="products-grid crosssel-pro">
              
             <?php 
			 $p->output_SP_checkout("select * from sanPham order by maSP desc limit 4");
			 ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="top-banner-section wow bounceInUp animated">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-sm-3 col-xs-6">
          <div class="col add-banner1">
            <div class="top-b-text"></div>
          </div>
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
   <footer>
    <section class="footer-navbar">
      <div class="footer-inner">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-xs-12 col-lg-8">
              <div class="footer-column pull-left collapsed-block">
                <h4>MEBOOK<a class="expander visible-xs" href="#TabBlock-1">+</a></h4>
                <div class="tabBlock" id="TabBlock-1">
                  <ul class="links">
                    <li class="first"><a href="#" title="How to buy">Giới thiệu</a></li>
                    <li><a href="#" title="">Điều khoản sử dụng</a></li>
                    <li><a href="#" title="Payment">Chính sách bảo mật</a></li>
                    <li><a href="#" title="Shipment&lt;/a&gt;">Chính sách bán hàng</a></li>
                    <li><a href="#" title="Where is my order?">Phương thức vận chuyển</a></li>
                    <!--<li class="last"><a href="#" title="Return policy">Return policy</a></li>-->
                  </ul>
                </div>
              </div>
              <div class="footer-column pull-left collapsed-block">
                <h4>Tài khoản<a class="expander visible-xs" href="#TabBlock-2">+</a></h4>
                <div class="tabBlock" id="TabBlock-2">
                  <ul class="links">
                    <li class="first"><a title="Your Account" href="login.php">Đăng nhập</a></li>
                    <li><a title="Information" href="#">Tạo tài khoản</a></li>
                    <li><a title="Addresses" href="#">Lịch sử mua hàng</a></li>
                    <li><a title="Addresses" href="#">Chi tiết tài khoản</a></li>
                    <!--<li><a title="Orders History" href="#">Orders History</a></li>
                    <li class="last"><a title=" Additional Information" href="#">Additional Information</a></li>-->
                  </ul>
                </div>
              </div>
              <div class="footer-column pull-left collapsed-block">
                <h4>Hỗ trợ<a class="expander visible-xs" href="#TabBlock-3">+</a></h4>
                <div class="tabBlock" id="TabBlock-3">
                  <ul class="links">
                    <li class="first"><a href="#" title="privacy policy">Chính sách đổi trả</a></li>
                    <li><a href="#" title="Search Terms">Chính sách bảo hành</a></li>
                    <li><a href="#" title="Advanced Search">Chính sách giao hàng</a></li>
                    <li><a href="contact_us.html" title="Contact Us">Liên hệ</a></li>
                    <!--<li><a href="#" title="Suppliers">Suppliers</a></li>
                    <li class=" last"><a href="#" title="Our stores" class="link-rss">Our stores</a></li>-->
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-lg-4">
              <div class="footer-column-last">
                <div class="newsletter-wrap collapsed-block">
                  <h4>Sign up for emails<a class="expander visible-xs" href="#TabBlock-4">+</a></h4>
                  <div class="tabBlock" id="TabBlock-4">
                    <form id="newsletter-validate-detail" method="post" action="#">
                      <div id="container_form_news">
                        <div id="container_form_news2">
                          <input type="text" class="input-text required-entry validate-email" value="Enter your email address" onfocus=" this.value='' " title="Sign up for our newsletter" id="newsletter" name="email">
                          <button class="button subscribe" title="Subscribe" type="submit"><span>Subscribe</span></button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="social">
                  <h4>Follow Us</h4>
                  <ul class="link">
                    <li class="fb pull-left"><a href="#"></a></li>
                    <li class="tw pull-left"><a href="#"></a></li>
                    <li class="googleplus pull-left"><a href="#"></a></li>
                    <li class="rss pull-left"><a href="#"></a></li>
                    <li class="pintrest pull-left"><a href="#"></a></li>
                    <li class="linkedin pull-left"><a href="#"></a></li>
                    <li class="youtube pull-left"><a href="#"></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-middle">
        <div class="container">
          <div class="row">
            <div style="text-align:center"><a href="index.php"><img src="images/logo/logo.png" height="150" alt=""></a></div>
            <address>
            <i class="icon-location-arrow"></i> 12 Nguyễn Văn Bảo,Phường 4 ,Q.Gò Vấp,TP Hồ Chí Minh<i class="icon-mobile-phone"></i><span>0387120640</span> <i class="icon-envelope"></i><a href="mailto:support@magikcommerce.com">lethoa22012020@gmail.com</a>
            </address>
          </div>
        </div>
      </div>
      <!--<div class="footer-bottom">
        <div class="container">
          <div class="row">
            <div class="col-sm-5 col-xs-12 coppyright">&copy; 2015 Magikcommerce. All Rights Reserved.</div>
            <div class="col-sm-7 col-xs-12 company-links">
              <ul class="links">
                <li><a title="Magento Themes" href="#">Magento Themes</a></li>
                <li><a title="Premium Themes" href="#">Premium Themes</a></li>
                <li><a title="Responsive Themes" href="#">Responsive Themes</a></li>
                <li class="last"><a title="Magento Extensions" href="#">Magento Extensions</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>-->
    </section>
  </footer>
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
        <li><a href="grid.php">Grid</a></li>
        <li> <a href="list.html">List</a></li>
        <li> <a href="product_detail.php">Product Detail</a></li>
        <li> <a href="shopping_cart.php">Shopping Cart</a></li>
        <li><a href="checkout.html">Checkout</a></li>
        <li> <a href="wishlist.html">Wishlist</a></li>
        <li> <a href="dashboard.html">Dashboard</a></li>
        <li> <a href="multiple_addresses.html">Multiple Addresses</a></li>
        <li> <a href="about_us.html">About us</a></li>
        <li><a href="compare.html">Compare</a></li>
 	   <li><a href="faq.html">FAQ</a></li>
        <li><a href="quick_view.php">Quick view</a></li>
        <li><a href="login.php">Login</a></li>
        <li><a href="blog.html">Blog</a>
          <ul>
            <li><a href="blog_detail.html">Blog Detail</a></li>
          </ul>
        </li>
        <li><a href="contact_us.html">Contact us</a></li>
        <li><a href="404error.html">404 Error Page</a></li>
      </ul>
    </li>
    <li><a href="grid.php">Sách </a>
      <ul>
        <li> <a href="grid.php" class="">Sách giáo khoa</a>
          <!--<ul>
            <li> <a href="grid.html" class="">Clutch Handbags</a></li>
            <li> <a href="grid.html" class="">Diaper Bags</a></li>
            <li> <a href="grid.html" class="">Bags</a></li>
            <li> <a href="grid.html" class="">Hobo handbags</a></li>
          </ul>-->
        </li>
        <li> <a href="grid.php">Sách tham khảo</a>
          <!--<ul>
            <li> <a href="grid.html">Beaded Handbags</a></li>
            <li> <a href="grid.html">Fabric Handbags</a></li>
            <li> <a href="grid.html">Handbags</a></li>
            <li> <a href="grid.html">Leather Handbags</a></li>
          </ul>-->
        </li>
        <li> <a href="grid.php">Sách ngoại ngữ</a>
         <!-- <ul>
            <li> <a href="grid.html">Flat Shoes</a></li>
            <li> <a href="grid.html">Flat Sandals</a></li>
            <li> <a href="grid.html">Boots</a></li>
            <li> <a href="grid.html">Heels</a></li>
          </ul>-->
        </li>
        <li> <a href="grid.php">Sách thiếu nhi</a>
         <!-- <ul>
            <li> <a href="grid.html">Bracelets</a></li>
            <li> <a href="grid.html">Necklaces &amp; Pendent</a></li>
            <li> <a href="grid.html">Pendants</a></li>
            <li> <a href="grid.html">Pins &amp; Brooches</a></li>
          </ul>-->
        </li>
        <li> <a href="grid.php">Sách kinh tế</a>
          <!--<ul>
            <li> <a href="grid.html">Casual Dresses</a></li>
            <li> <a href="grid.html">Evening</a></li>
            <li> <a href="grid.html">Designer</a></li>
            <li> <a href="grid.html">Party</a></li>
          </ul>-->
        </li>
    <!-- <li> <a href="grid.html">Swimwear</a>
          <ul>
            <li> <a href="grid.html">Swimsuits</a></li>
            <li> <a href="grid.html">Beach Clothing</a></li>
            <li> <a href="grid.html">Clothing</a></li>
            <li> <a href="grid.html">Bikinis</a></li>
          </ul>
        </li>-->
      </ul>
    </li>
    <li><a href="grid.php">Truyện tranh</a>
     <!-- <ul>
        <li> <a href="grid.html" class="">Shoes</a>
          <ul class="level1">
            <li class="level2 nav-6-1-1"><a href="grid.html">Sport Shoes</a></li>
            <li class="level2 nav-6-1-1"><a href="grid.html">Casual Shoes</a></li>
            <li class="level2 nav-6-1-1"><a href="grid.html">Leather Shoes</a></li>
            <li class="level2 nav-6-1-1"><a href="grid.html">canvas shoes</a></li>
          </ul>
        </li>
        <li> <a href="#.html">Dresses</a>
          <ul class="level1">
            <li class="level2 nav-6-1-1"><a href="grid.html">Casual Dresses</a></li>
            <li class="level2 nav-6-1-1"><a href="grid.html">Evening</a></li>
            <li class="level2 nav-6-1-1"><a href="grid.html">Designer</a></li>
            <li class="level2 nav-6-1-1"><a href="grid.html">Party</a></li>
          </ul>
        </li>
        <li> <a href="#.html">Jackets</a>
          <ul class="level1">
            <li class="level2 nav-6-1-1"><a href="grid.html">Coats</a></li>
            <li class="level2 nav-6-1-1"><a href="grid.html">Formal Jackets</a></li>
            <li class="level2 nav-6-1-1"><a href="grid.html">Leather Jackets</a></li>
            <li class="level2 nav-6-1-1"><a href="grid.html">Blazers</a></li>
          </ul>
        </li>
        <li> <a href="#.html">Watches</a>
          <ul class="level1">
            <li class="level2 nav-6-1-1"><a href="grid.html">Fasttrack</a></li>
            <li class="level2 nav-6-1-1"><a href="grid.html">Casio</a></li>
            <li class="level2 nav-6-1-1"><a href="grid.html">Titan</a></li>
            <li class="level2 nav-6-1-1"><a href="grid.html">Tommy-Hilfiger</a></li>
          </ul>
        </li>
        <li> <a href="#/sunglasses.html">Sunglasses</a>
          <ul class="level1">
            <li class="level2 nav-6-1-1"><a href="grid.html">Ray Ban</a></li>
            <li class="level2 nav-6-1-1"><a href="grid.html">Fasttrack</a></li>
            <li class="level2 nav-6-1-1"><a href="grid.html">Police</a></li>
            <li class="level2 nav-6-1-1"><a href="grid.html">Oakley</a></li>
          </ul>
        </li>
        <li> <a href="grid.html">Sách kinh tế </a>
          <ul class="level1">
            <li class="level2 nav-6-1-1"><a href="grid.html">Backpacks</a></li>
            <li class="level2 nav-6-1-1"><a href="grid.html">Wallets</a></li>
            <li class="level2 nav-6-1-1"><a href="grid.html">Laptops Bags</a></li>
            <li class="level2 nav-6-1-1"><a href="grid.html">Belts</a></li>
          </ul>
        </li>
      </ul>-->
    </li>
    <li><a href="grid.php">Từ điển</a>
     <!-- <ul>
        <li> <a href="grid.html"><span>Mobiles</span></a>
          <ul>
            <li> <a href="grid.html"><span>Samsung</span></a></li>
            <li> <a href="grid.html"><span>Nokia</span></a></li>
            <li> <a href="grid.html"><span>IPhone</span></a></li>
            <li> <a href="grid.html"><span>Sony</span></a></li>
          </ul>
        </li>
        <li> <a href="grid.html" class=""><span>Accesories</span></a>
          <ul>
            <li> <a href="grid.html"><span>Mobile Memory Cards</span></a></li>
            <li> <a href="grid.html"><span>Cases &amp; Covers</span></a></li>
            <li> <a href="grid.html"><span>Mobile Headphones</span></a></li>
            <li> <a href="grid.html"><span>Bluetooth Headsets</span></a></li>
          </ul>
        </li>
        <li> <a href="grid.html"><span>Cameras</span></a>
          <ul>
            <li> <a href="grid.html"><span>Camcorders</span></a></li>
            <li> <a href="grid.html"><span>Point &amp; Shoot</span></a></li>
            <li> <a href="grid.html"><span>Digital SLR</span></a></li>
            <li> <a href="grid.html"><span>Camera Accesories</span></a></li>
          </ul>
        </li>
        <li> <a href="grid.html"><span>Audio &amp; Video</span></a>
          <ul>
            <li> <a href="grid.html"><span>MP3 Players</span></a></li>
            <li> <a href="grid.html"><span>IPods</span></a></li>
            <li> <a href="grid.html"><span>Speakers</span></a></li>
            <li> <a href="grid.html"><span>Video Players</span></a></li>
          </ul>
        </li>
        <li> <a href="grid.html"><span>Computer</span></a>
          <ul>
            <li> <a href="grid.html"><span>External Hard Disk</span></a></li>
            <li> <a href="grid.html"><span>Pendrives</span></a></li>
            <li> <a href="grid.html"><span>Headphones</span></a></li>
            <li> <a href="grid.html"><span>PC Components</span></a></li>
          </ul>
        </li>
        <li> <a href="grid.html"><span>Appliances</span></a>
          <ul>
            <li> <a href="grid.html"><span>Vaccum Cleaners</span></a></li>
            <li> <a href="grid.html"><span>Indoor Lighting</span></a></li>
            <li> <a href="grid.html"><span>Kitchen Tools</span></a></li>
            <li> <a href="grid.html"><span>Water Purifier</span></a></li>
          </ul>
        </li>
      </ul>-->
    </li>
    <li><a href="grid.php">Tiểu thuyết</a>
      <!--<ul>
        <li> <a href="grid.html">Living Room</a>
          <ul>
            <li> <a href="grid.html">Racks &amp; Cabinets</a></li>
            <li> <a href="grid.html">Sofas</a></li>
            <li> <a href="grid.html">Chairs</a></li>
            <li> <a href="grid.html">Tables</a></li>
          </ul>
        </li>
        <li> <a href="grid.html" class="">Dining &amp; Bar</a>
          <ul>
            <li> <a href="grid.html">Dining Table Sets</a></li>
            <li> <a href="grid.html">Serving Trolleys</a></li>
            <li> <a href="grid.html">Bar Counters</a></li>
            <li> <a href="grid.html">Dining Cabinets</a></li>
          </ul>
        </li>
        <li> <a href="grid.html">Bedroom</a>
          <ul>
            <li> <a href="grid.html">Beds</a></li>
            <li> <a href="grid.html">Chest of Drawers</a></li>
            <li> <a href="grid.html">Wardrobes &amp; Almirahs</a></li>
            <li> <a href="grid.html">Nightstands</a></li>
          </ul>
        </li>
        <li> <a href="grid.html">Kitchen</a>
          <ul>
            <li> <a href="grid.html">Kitchen Racks</a></li>
            <li> <a href="grid.html">Kitchen Fillings</a></li>
            <li> <a href="grid.html">Wall Units</a></li>
            <li> <a href="grid.html">Benches &amp; Stools</a></li>
          </ul>
        </li>
      </ul>-->
    </li>
    <li><a href="grid.php">Đời sống</a></li>
    <li><a href="contact_us.html">Contact Us</a></li>
  </ul>
</div>


<!-- End Footer --> 
<!-- JavaScript --> 
<script type="text/javascript" src="js/jquery.min.js"></script> 
<script type="text/javascript" src="js/bootstrap.min.js"></script> 
<script type="text/javascript" src="js/parallax.js"></script> 
<script type="text/javascript" src="js/common.js"></script> 
<script type="text/javascript" src="js/owl.carousel.min.js"></script> 
<script type="text/javascript" src="js/jquery.flexslider.js"></script> 
<script type="text/javascript" src="js/jquery.mobile-menu.min.js"></script>
</body>

<!-- Tieu Long Lanh Kute -->
</html>