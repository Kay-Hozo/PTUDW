<?php
    class connectDB
    {
        private $db_host = "82.180.152.153";
        private $db_user = "u420857906_admin";
        private $db_pass = "xinchaoNha@132$";
        private $db_name = "u420857906_PTUDW";

        public function connect()
        {
            $conn = mysql_connect($this->db_host, $this->db_user, $this->db_pass);

            if(!$conn)
			{
				echo 'Lỗi, không thể kết nối với database!';
				exit();
			}
			else
			{
				mysql_select_db($this->db_name);
                mysql_query('SET NAMES UTF8');
				return $conn;
			}
        }

        public function closeDB($conn)
		{
			mysql_close($conn);	
		}
		public function xuatsp($sql)
		{
			$link=$this->connect();
			$kq=mysql_query($sql,$link);
			$i=mysql_num_rows($kq);
			if($i>0)
			{
				while($row=mysql_fetch_array($kq))
				{
					$id=$row['maSP'];
					$tensp=$row['tenSP'];
					$mota=$row['moTa'];
					$gia=$row['gia'];
					$soluong=$row['soLuong'];
					$hinh=$row['hinhAnh'];
					echo ' <li class="item item-animate wide-first">
                              <div class="item-inner">
                                <div class="item-img">
                                  <div class="item-img-info"><a href="product_detail.php?layid='.$id.'" title="Sample Product" class="product-image"><img src="./images/book/'.$hinh.'" alt="Sample Product"></a>
                                    <div class="new-label new-top-left">New</div>
                                    <div class="item-box-hover">
                                      <div class="box-inner">
                                        <div class="actions">
                                          <div class="add_cart">
                                            <a href="./shopping_cart.php"><button class="button btn-cart" type="button"><span>Thêm vào giỏ hàng</span></button></a>
                                          </div>
                                          <div class="product-detail-bnt"><a href="quick_view.php?layid='.$id.'" class="button detail-bnt"><span>Quick View</span></a></div>
                                          
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="item-info">
                                  <div class="info-inner">
                                    <div class="item-title"><a href="product_detail.php?layid='.$id.'" title="Sample Product">'.$tensp.'</a> </div>
                                    <div class="item-content">
                                      <div class="rating">
                                        <div class="ratings">
                                          <div class="rating-box">
                                            <div class="rating" style="width:80%"></div>
                                          </div>
                                          <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                        </div>
                                      </div>
                                      <div class="item-price">
                                        <div class="price-box"><span class="regular-price"><span class="price">$'.$gia.'.00</span> </span> </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </li>';
				}
			}
			else
			{
				echo 'Không có dữ liệu';
			}
			$this->closeDB($link);
		}
		
    }
	
?>