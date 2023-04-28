<?php

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
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Roboto:400,500,300,700,900' rel='stylesheet' type='text/css'>
</head>

<body class="cms-index-index cms-home-page">
<div id="page"> 
  <header>
    <div class="header-container">
      <div class="container">
        <div class="row">
          <div class="col-sm-3 col-xs-12"> 
            <!-- Header Logo -->
            <div class="logo"><a title="Magento Commerce" href="index.php"><img alt="Magento Commerce" src="images/logo/logo.png" style="height:150px; "></a></div>
            <!-- End Header Logo --> 
          </div>
          <div class="col-lg-9 col-xs-12 right_menu">
            <div class="toplinks"> 
              <!-- Default Welcome Message -->
              <div class="welcome-msg hidden-xs">Default welcome msg! </div>
              <!-- End Default Welcome Message -->
              <div class="links">
                <div class="myaccount"><a title="My Account" href="login.php"><span class="hidden-xs">Tài khoản</span></a></div>
                <!--<div class="wishlist"><a title="My Wishlist" href="wishlist.html"><span class="hidden-xs">Wishlist</span></a></div>-->
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
                          <li class="level1 nav-6-1 parent item"><a href="grid.php"><span>Sách kinh tế</span></a></li>
                        </ul>
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
                      <div class="top-subtotal"><?php echo $p->laygiatri("select count(*) from giohang");?> items, <span class="price"><?php echo $p->subtotal("select*from giohang g left join sanPham s on g.maSP=s.maSP ");?>.000 đ</span> </div>
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
  <!-- Breadcrumbs -->
  <div class="breadcrumbs bounceInUp animated">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <ul>
            <li class="home"> <a title="Go to Home Page" href="index.php">Home</a><span>» </span></li>
            <li class=""> <a title="Go to Home Page" href="grid.php">Book</a><span>» </span></li>
            
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
			    $p->chitietsp("select* from sanPham s join tacGia t on s.maTacGia=t.maTG where s.maSP='$layid' limit 1");
				
				switch($_POST['nut'])
				  {
					  case'Add to Cart':
					  {
						  $soluong=$_REQUEST['qty'];
						  $link=$p->addtocart();
						  $sql="select*from giohang where maSP='$layid'";
						  $result=mysql_query($sql,$link);
						  $i=mysql_num_rows($result);
						  if($i>0)
						  {
							  $row=mysql_fetch_array($result);
							  $sl=$row['soluong'];
							  $sql1="update giohang set soluong='$sl'+1 where maSP='$layid'";
							  if( mysql_query($sql1,$link))
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
						  else
						  {
							  $sql2="insert into giohang(maKH,maSP,soluong) values (1,'$layid','$soluong')";
							  if( mysql_query($sql2,$link))
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
                        <form id="review-form" method="post" action="http://www.magikcommerce.com/review/product/post/id/176/">
                          <h3>Viết đánh giá của riêng bạn</h3>
                          <fieldset>
                            <h4>làm thế nào để bạn đánh giá sản phẩm này?<em class="required">*</em></h4>
                            <span id="input-message-box"></span>
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
                                  <th>Giá</th>
                                  <td class="value"><input type="radio" class="radio" value="11" id="Price_1" name="ratings[3]"></td>
                                  <td class="value"><input type="radio" class="radio" value="12" id="Price_2" name="ratings[3]"></td>
                                  <td class="value"><input type="radio" class="radio" value="13" id="Price_3" name="ratings[3]"></td>
                                  <td class="value"><input type="radio" class="radio" value="14" id="Price_4" name="ratings[3]"></td>
                                  <td class="value last"><input type="radio" class="radio" value="15" id="Price_5" name="ratings[3]"></td>
                                </tr>
                                <tr class="even">
                                  <th>Giá trị</th>
                                  <td class="value"><input type="radio" class="radio" value="6" id="Value_1" name="ratings[2]"></td>
                                  <td class="value"><input type="radio" class="radio" value="7" id="Value_2" name="ratings[2]"></td>
                                  <td class="value"><input type="radio" class="radio" value="8" id="Value_3" name="ratings[2]"></td>
                                  <td class="value"><input type="radio" class="radio" value="9" id="Value_4" name="ratings[2]"></td>
                                  <td class="value last"><input type="radio" class="radio" value="10" id="Value_5" name="ratings[2]"></td>
                                </tr>
                                <tr class="last odd">
                                  <th>Chất lượng</th>
                                  <td class="value"><input type="radio" class="radio" value="1" id="Quality_1" name="ratings[1]"></td>
                                  <td class="value"><input type="radio" class="radio" value="2" id="Quality_2" name="ratings[1]"></td>
                                  <td class="value"><input type="radio" class="radio" value="3" id="Quality_3" name="ratings[1]"></td>
                                  <td class="value"><input type="radio" class="radio" value="4" id="Quality_4" name="ratings[1]"></td>
                                  <td class="value last"><input type="radio" class="radio" value="5" id="Quality_5" name="ratings[1]"></td>
                                </tr>
                              </tbody>
                            </table>
                            <input type="hidden" value="" class="validate-rating" name="validate_rating">
                            <div class="review1">
                              <ul class="form-list">
                                <li>
                                  <label class="required" for="nickname_field">Tên<em>*</em></label>
                                  <div class="input-box">
                                    <input type="text" class="input-text" id="nickname_field" name="nickname">
                                  </div>
                                </li>
                                <li>
                                  <label class="required" for="summary_field">Tóm tắt<em>*</em></label>
                                  <div class="input-box">
                                    <input type="text" class="input-text" id="summary_field" name="title">
                                  </div>
                                </li>
                              </ul>
                            </div>
                            <div class="review2">
                              <ul>
                                <li>
                                  <label class="required label-wide" for="review_field">Đánh giá<em>*</em></label>
                                  <div class="input-box">
                                    <textarea rows="3" cols="5" id="review_field" name="detail"></textarea>
                                  </div>
                                </li>
                              </ul>
                              <div class="buttons-set">
                                <button class="button submit" title="Submit Review" type="submit"><span>Gửi đánh giá</span></button>
                              </div>
                            </div>
                          </fieldset>
                        </form>
                      </div>
                    </div>
                    <div class="box-reviews2">
                      <h3>Khách hàng đánh giá</h3>
                      <div class="box visible">
                        <ul>
                          <li>
                            <table class="ratings-table">
                              
                              <tbody>
                                <tr>
                                  <th>Giá trị</th>
                                  <td><div class="rating-box">
                                      <div class="rating" style="width:100%;"></div>
                                    </div></td>
                                </tr>
                                <tr>
                                  <th>Chất lượng</th>
                                  <td><div class="rating-box">
                                      <div class="rating" style="width:100%;"></div>
                                    </div></td>
                                </tr>
                                <tr>
                                  <th>Giá</th>
                                  <td><div class="rating-box">
                                      <div class="rating" style="width:100%;"></div>
                                    </div></td>
                                </tr>
                              </tbody>
                            </table>
                            <div class="review">
                              <h6><a href="#">Xuất sắc</a></h6>
                              <small>Đánh giá bởi <span>Phạm Thị Thùy Trang </span> vào 1/3/2014 </small>
                              <div class="review-txt"> Đóng gói kỹ, giấy đẹp. Cuốn sách của mình còn nguyên seal, rất đẹp và mới. <br> Nội dung sách thì không phải bàn rồi, mình đọc online rồi và giờ mua sách ủng hộ và đọc lại. Người giàu có nhất thành
                                                        Babylon và Thịnh vượng tài chính tuổi 30 là 2 cuốn sách về tài chính cá nhân mình tâm đắc cho đến hiện tại. Vẫn đang tìm hiểu thêm những cuốn sách khác</div>
                            </div>
                          </li>
                          <li class="even">
                             <table class="ratings-table">
                              
                              <tbody>
                                <tr>
                                  <th>Giá trị</th>
                                  <td><div class="rating-box">
                                      <div class="rating" style="width:100%;"></div>
                                    </div></td>
                                </tr>
                                <tr>
                                  <th>Chất lượng</th>
                                  <td><div class="rating-box">
                                      <div class="rating" style="width:100%;"></div>
                                    </div></td>
                                </tr>
                                <tr>
                                  <th>Giá</th>
                                  <td><div class="rating-box">
                                      <div class="rating" style="width:100%;"></div>
                                    </div></td>
                                </tr>
                              </tbody>
                            </table>
                            <div class="review">
                              <h6><a href="#/catalog/product/view/id/60/">Tuyệt vời</a></h6>
                              <small>Đánh giá bởi <span>Nguyễn Văn Tuấn</span>vào 1/3/2014 </small>
                              <div class="review-txt"> Tuyệt vời ! </div>
                            </div>
                          </li>
                          <li>
                            <table class="ratings-table">
                              
                              <tbody>
                                <tr>
                                  <th>Giá trị</th>
                                  <td><div class="rating-box">
                                      <div class="rating" style="width:100%;"></div>
                                    </div></td>
                                </tr>
                                <tr>
                                  <th>Chất lượng</th>
                                  <td><div class="rating-box">
                                      <div class="rating" style="width:100%;"></div>
                                    </div></td>
                                </tr>
                                <tr>
                                  <th>Giá</th>
                                  <td><div class="rating-box">
                                      <div class="rating" style="width:100%;"></div>
                                    </div></td>
                                </tr>
                              </tbody>
                            </table>
                            <div class="review">
                              <h6><a href="#/catalog/product/view/id/59/">Độc đáo</a></h6>
                              <small>Đánh giá bởi <span>Trần Thị Hương</span>vào 1/3/2014 </small>
                              <div class="review-txt"> Tuyệt! </div>
                            </div>
                          </li>
                        </ul>
                      </div>
                      <div class="actions"> <a class="button view-all" id="revies-button" href="#"><span><span>Tất cả đánh giá</span></span></a> </div>
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
					$p->xuatsp("select * from sanPham order by maSP asc limit 4"); 
					 
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
					$p->xuatsp("select * from sanPham order by maSP desc limit 4"); 
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
          
        </li>
        <li> <a href="grid.php">Sách tham khảo</a>
         
        </li>
        <li> <a href="grid.php">Sách ngoại ngữ</a>
         
        </li>
        <li> <a href="grid.php">Sách thiếu nhi</a>
         
        </li>
        <li> <a href="grid.php">Sách kinh tế</a>
          
        </li>
    
      </ul>
    </li>
    <li><a href="grid.php">Truyện tranh</a>
    
      
    </li>
    <li><a href="grid.php">Từ điển</a>
     
    </li>
    <li><a href="grid.php">Tiểu thuyết</a>
      
    </li>
    <li><a href="grid.php">Đời sống</a></li>
    <li><a href="contact_us.html">Contact Us</a></li>
  </ul>
</div>

<?php 
/*switch($_POST['nut'])
  {
	  case'Thêm vào giỏ hàng':
	  {
		  
		  $sql = "insert into giohang(maSP,maKH,soluong) values ('$layid',1,1);";
		
		  $result = $p->themsuaxoa($sql);
		 
						 if($result==1)
						 {
							 echo " <script>alert('Thêm giỏ hàng thành công')</script>;";
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