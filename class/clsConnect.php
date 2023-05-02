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
                                  <div class="item-img-info"><a href="product_detail.php?layid='.$id.'" title="'.$tensp.'" class="product-image"><img src="./images/book/'.$hinh.'" alt="'.$tensp.'"></a>
                                    <div class="new-label new-top-left">New</div>
                                    <div class="item-box-hover">
                                      <div class="box-inner">
                                        <div class="actions">
                                          <div class="add_cart">
										  <form method="POST">
                                            <a href="?layid='.$id.'"><button class="button btn-cart" type="submit" id="nut" name="nut" value="Add to Cart"><span>Thêm vào giỏ hàng</span></button></a>
											</form>
                                          </div>
                                          <div class="product-detail-bnt"><a href="quick_view.php?layid='.$id.'" class="button detail-bnt"><span>Quick View</span></a></div>
                                          
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="item-info">
                                  <div class="info-inner">
                                    <div class="item-title"><a href="product_detail.php?layid='.$id.'" title="'.$tensp.'">'.$tensp.'</a> </div>
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
                                        <div class="price-box"><span class="regular-price"><span class="price">'.$gia.'.000 đ</span> </span> </div>
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
		public function xuatsp2($sql)
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
					echo ' 
                            <li class="item item-animate wide-first">
                              <div class="item-inner">
                                <div class="item-img">
                                  <div class="item-img-info"><a href="product_detail.php?layid='.$id.'" title="'.$tensp.'" class="product-image"><img src="./images/book/'.$hinh.'" alt="'.$tensp.'"></a>
                                    <div class="new-label new-top-left">New</div>
                                    <div class="item-box-hover">
                                      <div class="box-inner">
                                        <div class="actions">
                                          <div class="add_cart">
                                           <a href="?layid='.$id.'"> <button class="button btn-cart" type="submit" name="nut" id="nut" value="Add to Cart" ><span>Add to Cart</span></button></a>
                                          </div>
                                          <div class="product-detail-bnt"><a href="quick_view.php?layid='.$id.'" class="button detail-bnt"><span>Quick View</span></a></div>
                                          
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="item-info">
                                  <div class="info-inner">
                                    <div class="item-title"><a href="product_detail.php?layid='.$id.'" title="'.$tensp.'">'.$tensp.'</a> </div>
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
                                        <div class="price-box"><span class="regular-price"><span class="price">'.$gia.'.000 đ</span> </span> </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </li>
							';
				}
			}
			else
			{
				echo 'Không có dữ liệu';
			}
			$this->closeDB($link);
		}
		public function laygiatri($sql)
		{
			$link=$this->connect();
			 $ketqua=mysql_query($sql,$link);
			 $i=mysql_num_rows($ketqua);
			 $giatri="";
			 if($i>0)
			 {
				
			 while($row=mysql_fetch_array($ketqua))
				 {
					
					 $giatri=$row[0];
					 
				 }
				 return $giatri;
			 }
		}
		public function thanhtien($sql)
		{
			
			$link=$this->connect();
			$kq=mysql_query($sql,$link);
			$i=mysql_num_rows($kq);
			if($i>0)
			{
				$thanhtien=0;
				while($row=mysql_fetch_array($kq))
				{
					
					$id=$row['maSP'];
					$tensp=$row['tenSP'];
					$mota=$row['moTa'];
					$gia=$row['gia'];
					$soluong=$row['soluong'];
					$hinh=$row['hinhAnh'];
					$tongtien=$gia*$soluong;
					$thanhtien+=$tongtien;
					
				}
				echo  $thanhtien;
			}
			else
			{
				echo 'Không có dữ liệu';
			}
			$this->closeDB($link);
		}
		public function ouput_checkout($sql)
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
					$soluong=$row['soluong'];
					$hinh=$row['hinhAnh'];
					
					echo '<li class="item first">
                        <div class="item-inner"><a class="product-image" title="'.$tensp.'" href="./shopping_cart.php"><img alt="'.$tensp.'" src="./images/book/'.$hinh.'"></a>
                          <div class="product-details">
                            <div class="access"><a class="btn-remove1" title="Remove This Item" href="?layid='.$id.'">Remove</a> <a class="btn-edit" title="Edit item" href="./shopping_cart.php"><i class="icon-pencil"></i><span class="hidden">Edit item</span></a> </div>
                            <!--access--> <strong>'.$soluong.'</strong> x <span class="price">'.$gia.'.000 đ</span>
                            <p class="product-name"><a href="product_detail.php?layid='.$id.'">'.$tensp.'</a></p>
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