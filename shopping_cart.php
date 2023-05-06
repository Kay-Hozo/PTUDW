<?php 
include("./class/clsLogin.php");
$login = new login();
session_start();

if(isset($_SESSION["id"]) && isset($_SESSION["user"]) && isset($_SESSION["pass"]) && isset($_SESSION["ten"]) && isset($_SESSION["quyen"]))
{
	$login->confirmLogin($_SESSION["id"], $_SESSION["user"], $_SESSION["pass"], $_SESSION["ten"], $_SESSION["quyen"]);
}
else
{
	header('location: login.php');	
}
?>
<?php
include("./class/clsgiohang.php");
$p = new giohang();
if(isset($_REQUEST['layid']))
{
	$layid=$_REQUEST['layid'];
}
session_start();
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
include ("./class/clsStatusLogin.php");

$giaodien = new statusLogin();
$ship=0;
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
                <li class="level1 first parent"><a href="checkout.php"><span>Thanh toán</span></a>  </li>
              
                <li class="level1"><a href="login.php"><span>Đăng nhập</span></a></li>
                
                <li class="level1 first parent"><a href="blog.php"><span>Bài viết</span></a>
                 
                </li>
                <li class="level1"><a href="contact_us.html"><span>Liên hệ</span></a></li>
              
              </ul>
            </li>
             <li class="mega-menu"><a href="gioithieu.php" class="level-top"><span>Giới thiệu</span></a></li>
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
                          <li class="level1 nav-6-1 parent item"><a href="show_product.php"><span>Sách kinh tế</span></a>
                           
                          </li>
                          
                        </ul>
                      </div>
                    </div>
                    
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
                <div data-toggle="dropdown" data-hover="dropdown" class="basket dropdown-toggle"><a href="shopping_cart.php"><span class="hidden-xs">Giỏ hàng(<?php echo $p->laygiatri("select count(*) from giohang where maKH={$maKH}",$maKH);?>)</span></a></div>
                <div>
                  <div class="top-cart-content" style="display: none;">
                    <div class="block-subtitle">
                      <div class="top-subtotal"><?php echo $p->laygiatri("select count(*) from giohang where maKH={$maKH}",$maKH);?>  items, <span class="price"><?php echo $p->subtotal("select*from giohang g left join sanPham s on g.maSP=s.maSP where maKH={$maKH}",$maKH);?>.000 đ</span> </div>
                      <!--top-subtotal-->
                      <div class="pull-right">
                        <button title="View Cart" class="view-cart" type="button"><a href="shopping_cart.php"><span>Xem giỏ hàng</span></a></button>
                      </div>
                      <!--pull-right--> 
                    </div>
                    <!--block-subtitle-->
                    <ul class="mini-products-list" id="cart-sidebar">
                      <?php
					  $p->ouput_checkout("select*from giohang g left join sanPham s on g.maSP=s.maSP where maKH={$maKH}",$maKH); 
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
  
  <!-- Main Container -->
  <section class="main-container col1-layout wow bounceInUp animated">
    <div class="main container">
      <div class="col-main">
        <div class="cart">
        <form method="post" action="#">
          <div class="page-title">
            <h2>Giỏ hàng</h2>
          </div>
          <div class="table-responsive">
            <!--<form method="post" action="#">-->
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
                    
                      <td class="a-right last" colspan="8"><a href="index.php"><button  class="button btn-continue" title="Continue Shopping" type="button"><span>tiếp tục mua sắm </span></button></a>
                        <a href="delete_cart.php"><button class="button btn-update" title="Update Cart" value="update_qty" name="update_cart_action" type="button" id="update_cart_action"><span>Xóa giỏ hàng</span></button></a>
                        <button id="empty_cart_button" class="button" title="Clear Cart" value="empty_cart" name="update_cart_action" type="submit" ><span>cập nhật giỏ hàng</span></button></td>
                    
                    </tr>
                  
                  </tfoot>

                  <tbody>
						<?php 
                         $sql="select * from giohang g left join sanPham s on g.maSP=s.maSP where maKH = {$_SESSION['id']}";
                         $p->load_DS_giohang($sql);
                         
                         
                       
                         ?>
                  </tbody>

                </table>
              </fieldset>
          <!--  </form>-->
          </div>
          <!-- BEGIN CART COLLATERALS -->
          <div class="cart-collaterals row">
           <?php
		   $p->diachiGH("select*from taiKhoan where maTK={$_SESSION['id']}");
		   
		   ?>
            <div class="col-sm-4">
              <div class="discount">
                <h3>Mã giảm giá </h3>
               <!-- <form method="post" action="#" id="discount-coupon-form">-->
                  <label for="coupon_code">Nhập mã giảm giá của bạn nếu có</label>
                  <input type="hidden" value="0" id="remove-coupone" name="remove">
                  <input type="text" name="coupon_code" id="coupon_code" class="input-text fullwidth">
                  <button value="Apply Coupon" class="button coupon " title="Apply Coupon" type="button"><span>Áp dụng phiếu giảm giá</span></button>
                <!--</form>-->
              </div>
            <div >
             <div class="shipping">
                <h3>Phương thức thanh toán</h3>
                <div class="shipping-form">
                 <!-- <form id="shipping-zip-form" method="post" action="#">-->
                    <ul class="form-list">
                    <li>
                       <div class="input-box">
                          <select title="State/Province" name="pttt" id="pttt">
                            <option value="">Vui lòng chọn phương thức thanh toán</option>
                            <option value="Thanh toán khi nhận hàng" title="Alabama">Thanh toán khi nhận hàng</option>
                            <option value="Ví MOMO" title="Alaska">Ví MOMO</option>
                            <option value="Ví ZaloPay" title="American Samoa">Ví ZaloPay</option>
                            <option value="Ví VNPay" title="Arizona">Ví VNPay</option>
                            <option value="Thẻ tín dụng ATM" title="Arkansas">Thẻ tín dụng ATM</option>
                           
                            </select>
                         </div>
                      </li>
                      </ul>
                    <!--</form>-->
                   </div>
               </div>
            </div>
            <div >
             <div class="shipping"><!--các bước làm chức năng đặt hàng
                                        B1:lấy thông tin 
                                         - lấy thông tin khách hàng
                                          - lấy thông tin giỏ hàng
                                           - tính tiền ship 
                                        B2: tính toán tổng tiền
                                          - đơn giá*soluong sp + ship=tổng tiền
                                        B3: lưu vào csdl bảng hóa đơn và chi tiết hóa đơn
                                        -->
                <h3>Phí vận chuyển</h3>
                <div class="shipping-form">
                  <!--<form id="shipping-zip-form" method="post" action="#">-->
                    <ul class="form-list">
                    <li>
                       <div class="input-box">
                           <input type="text" name="phiship" id="phiship" class="input-text validate-postcode" value="<?php 
						 //echo  $p->ship("select*from taiKhoan where maTK='$maKH'");
						 $khuvuc=$_REQUEST['region_id'];
						 if($khuvuc=='Thành phố Hồ Chí Minh')
						 {
							 $ship=0;
						 }
						 else
						 {
							 $ship=30;
						 }
						 echo $ship;
						   ?>">
                         </div>
                      </li>
                      </ul>
                    <!--</form>-->
                   </div>
               </div>
            </div>
            </div>
            
            <div class="totals col-sm-4">
              <h3>Tổng cộng giỏ hàng</h3>
              <div class="inner">
                <table class="table shopping-cart-table-total" id="shopping-cart-totals-table">
                <tfoot>
                    <tr>
                      <td colspan="1" class="a-left"><strong>Tổng cộng</strong></td>
                      <?php 
				 $sql="select * from giohang g left join sanPham s on g.maSP=s.maSP where maKH = {$_SESSION['id']}";
				 $p->thanhtien_giohang($sql);
				 
				 ?>
                  </tr>
                  <tr>
                      <td colspan="1" class="a-left"><strong>Phí vận chuyển</strong></td>
                      <?php 
						 
						 $khuvuc=$_REQUEST['region_id'];
						 if($khuvuc=='Thành phố Hồ Chí Minh')
						 {
							 $ship=0;
						 }
						 else
						 {
							 $ship=30;
						 }
						 echo '<td class="a-right"><strong><span class="price">'.$ship.'.000 đ</span></strong></td>';
						   ?>
                      
                     
                  </tr>
                  <tr>
                      <td colspan="1" class="a-left"><strong> Subtotal</strong> </td>
                      <td class="a-right"><strong><span class="price"><?php 
					$tong=$p->subtotal("select*from giohang g left join sanPham s on g.maSP=s.maSP where maKH={$maKH}",$maKH);
					  
					  $phi=$ship;
					  $sub= $tong + $phi;
					  echo $sub;
					  ?>.000 đ</span></strong></td>
                    </tr>
              </tfoot>
                   
                 
                 
                 
                </table>
                <ul class="checkout">
                  <li>
                  
                    <button class="button btn-proceed-checkout" title="Proceed to Checkout" type="submit" id="thanhtoan" name="thanhtoan" value="Xác nhận thanh toán"><span>Xác nhận thanh toán</span></button>
               
                    
                  </li>
                
                  <li><a title="Checkout with Multiple Addresses" href="#">Thanh toán với nhiều địa chỉ</a> </li>
                 
                </ul>
              </div>
              <!--inner--> 
              
            </div>
          
          </div>
          
          <!--cart-collaterals--> 
          
        </div>
        </form>
        <?php
		switch($_POST['thanhtoan'])
		{
			case'Xác nhận thanh toán':
			{
				$ten=$_REQUEST['txtten'];
				$sdt=$_REQUEST['sdt'];
				$quocgia=$_REQUEST['country_id'];
				$tp=$_REQUEST['region_id'];
				$quan=$_REQUEST['huyen'];
				$phuong=$_REQUEST['phuong'];
				$dc=$_REQUEST['DC'];
				$thoigiandat=date('Y-m-d H:i:s');
				$thanhtoan=$_REQUEST['pttt'];
				$tongtien=$sub;
				$sql="INSERT INTO donHang ( maTaiKhoan, trangThai,thanhToan, tongTien,thoiGianMua, diachigiaohang, quocgia, thanhpho, quan, phuong) VALUES ( '$maKH', 'chờ xác nhận', '{$thanhtoan}', '$sub','{$thoigiandat}',  '{$dc}', '{$quocgia}', '{$tp}', '{$quan}', '{$phuong}');";
				
                if($p->themsuaxoa($sql)==1)
				{
					
					 $link=$p->addtocart();
					 $sql1="select max(maDH) from donHang";
					 $result=mysql_query($sql1,$link);
					 $r=mysql_fetch_array($result);
					 $maDH=$r[0];
					 $sql2="select g.maSP,g.soluong,s.gia from giohang g join sanPham s on g.maSP=s.maSP where g.maKH='$maKH'";
					 $kq=mysql_query($sql2,$link);
					 while( $row=mysql_fetch_array($kq))
					 {
				     $maSP=$row['maSP'];
					 $sl=$row['soluong'];
					 $gia=$row['gia'];
					 $sqlchitietDH="INSERT INTO chiTietDH (maDonHang, maSanPham, soLuong, gia, ten, sdtnguoinhan) VALUES ('$maDH','$maSP','$sl','$gia', '{$ten}', '{$sdt}')";
					 $result1=$p->themsuaxoa($sqlchitietDH);
					 }
					if($result1==1)
					 {
						 $sql_delete="delete from giohang where maKH='$maKH'";
						 if($p->themsuaxoa($sql_delete)==1)
						 {
					        echo " <script>alert('đặt hàng thành công')</script>;";
							 echo '<script language="javascript">
										window.location="./shopping_cart.php";
										  </script>';
						 }
						 else
						 {
							 echo " <script>alert('đặt hàng thất bại')</script>;";
							 echo '<script language="javascript">
										window.location="./shopping_cart.php";
										  </script>';
						 }
					 }
					 else
					 {
						 echo " <script>alert('thêm chi tiết DH thất bại')</script>;";
					 }
					
				}
				else
				{
					echo " <script>alert('thêm đơn hàng thất bại')</script>;";
				}
				break;
			}
			/*case'Thay đổi địa chỉ':
			{
				$sdt=$_REQUEST['sdt'];
				$quocgia=$_REQUEST['country_id'];
				$tp=$_REQUEST['region_id'];
				$quan=$_REQUEST['huyen'];
				$phuong=$_REQUEST['phuong'];
				$dc=$_REQUEST['DC'];
				echo $sdt;
				//$sql="update taiKhoan set sdt='$sdt',quocgia='$quocgia',tinh_thanhpho='$tp',quan_huyen='$quan',phuong_xa='$phuong',diaChi='$dc' where maTK='$maKH'";
				//if($p->themsuaxoa($sql)==1)
				//{
				//	echo '<script>Cập nhật thành công
				
				break;
			}*/
		}
		?>
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
          <!--<ul>
            <li> <a href="grid.html" class="">Clutch Handbags</a></li>
            <li> <a href="grid.html" class="">Diaper Bags</a></li>
            <li> <a href="grid.html" class="">Bags</a></li>
            <li> <a href="grid.html" class="">Hobo handbags</a></li>
          </ul>-->
        </li>
        <li> <a href="show_product.php">Sách tham khảo</a>
          <!--<ul>
            <li> <a href="grid.html">Beaded Handbags</a></li>
            <li> <a href="grid.html">Fabric Handbags</a></li>
            <li> <a href="grid.html">Handbags</a></li>
            <li> <a href="grid.html">Leather Handbags</a></li>
          </ul>-->
        </li>
        <li> <a href="show_product.php">Sách ngoại ngữ</a>
         <!-- <ul>
            <li> <a href="grid.html">Flat Shoes</a></li>
            <li> <a href="grid.html">Flat Sandals</a></li>
            <li> <a href="grid.html">Boots</a></li>
            <li> <a href="grid.html">Heels</a></li>
          </ul>-->
        </li>
        <li> <a href="show_product.php">Sách thiếu nhi</a>
         <!-- <ul>
            <li> <a href="grid.html">Bracelets</a></li>
            <li> <a href="grid.html">Necklaces &amp; Pendent</a></li>
            <li> <a href="grid.html">Pendants</a></li>
            <li> <a href="grid.html">Pins &amp; Brooches</a></li>
          </ul>-->
        </li>
        <li> <a href="show_product.php">Sách kinh tế</a>
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
    <li><a href="show_product.php">Truyện tranh</a>
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
    <li><a href="show_product.php">Từ điển</a>
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
    <li><a href="show_product.php">Tiểu thuyết</a>
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
    <li><a href="show_product.php">Đời sống</a></li>
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