<?php 
    include ("clsConnect.php");
    class product extends connectDB
    {
        public function themSuaXoaSP($sql)
        {
            $conn = $this->connect();
			
			$result = mysql_query($sql, $conn);
			if($result)
			{
				return 1;
			}
			else
			{
				return 0;
			}
			
			$this->closeDB($conn);
        }
		
		public function showOptionsInSelect($sql, $tenSelect, $select_id=0)
		{
			$conn = $this->connect();
			$result = mysql_query($sql, $conn);
			$row = mysql_num_rows($result);
			if($row > 0)
			{
				echo "<select name='{$tenSelect}' id='{$tenSelect}'>";
				
				while($option = mysql_fetch_array($result))
				{
					if($option['0'] == $select_id) 
					{
						echo "<option  selected value='{$option['0']}'>{$option['1']}</option>";
					}
					else 
					{
						echo "<option value='{$option['0']}'>{$option['1']}</option>";
					}
				}
				
				echo "</select>";
			}
			else
			{
				echo "";	
			}
				
			$this->closeDB($conn);
		}
		
		public function countRowTable($tenBang)
		{
            $conn = $this->connect();
			$sql = "SELECT COUNT(*) FROM {$tenBang};";
			$result = mysql_query($sql, $conn);
			
			if($result !== false)
			{
				$row = mysql_fetch_array($result);
				return $row[0];
			}
			else
			{
				return 0;
			}
		}
		
		public function uploadImg ($tmpName, $folder, $name, $type)
		{
			if($type != 'image/jpg' && $type != 'image/png' && $type != 'image/jpeg')
			{
				return 0;	
			}
			
			$new_name = $folder . $name;
			
			if(move_uploaded_file($tmpName, $new_name))
			{
				return 1;	
			}
			else
			{
				return 0;
			}
		}
		
		public function showUpProduct($sql)
		{
			$conn = $this->connect();
			$result = mysql_query($sql, $conn);
			
			if($result != false)
			{
				$product = mysql_fetch_array($result);
				echo 
				"
					<div class='form-group row'>
					  <label for='txt_Up_TenSP' class='col-sm-2 col-form-label'>Tên sản phẩm</label>
					  <div class='col-sm-10'>
						<input name='txt_Up_TenSP' type='text' value='{$product['tenSP']}' id='txt_Up_TenSP' class='form-control' placeholder='Nhập tên sản phẩm'>
					  </div>
					</div>
					<div class='form-group row'>
					  <label for='txt_Up_Gia' class='col-sm-2 col-form-label'>Giá</label>
					  <div class='col-sm-10'>
						<input name='txt_Up_Gia' type='number' value='{$product['gia']}' id='txt_Up_Gia' class='form-control' value='0' min='0'>
					  </div>
					</div>
					<div class='form-group row'>
					  <label for='txt_Up_GiamGia' class='col-sm-2 col-form-label'>Giảm giá</label>
					  <div class='col-sm-10'>
						<input name='txt_Up_GiamGia' type='number' value='{$product['giamGia']}' id='txt_Up_GiamGia' class='form-control' value='0' min='0'>
					  </div>
					</div>
					<div class='form-group row'>
					  <label for='txt_Up_MT' class='col-sm-2 col-form-label'>Mô tả</label>
					  <div class='col-sm-10'>
						<textarea name='txt_Up_MT' class='form-control' id='txt_Up_MT' rows='5'>
							{$product['moTa']}
						</textarea>
					  </div>
					</div>
					<div class='form-group row'>
					  <label for='txt_Up_SL' class='col-sm-2 col-form-label'>Số lượng</label>
					  <div class='col-sm-10'>
						<input type='number' name='txt_Up_SL' value='{$product['soLuong']}' id='txt_Up_SL' class='form-control' min='0'>
					  </div>
					</div>
					<div class='form-group row'>
					  <label for='txt_Up_Anh' class='col-sm-2 col-form-label'>Hình ảnh</label>
					  <div class='col-sm-10'>
						<input type='file' name='txt_Up_Anh' id='txt_Up_Anh'>
					  </div>
					</div>
				";
				 
				$this->closeDB($conn);
			}
			else
			{
				echo "Không thành công";
				return 0;
			}
		}
		
		public function  showProductsAdmin($product_id=0)
        {
            $conn = $this->connect();
			if($product_id > 0)
			{
				$sql = "SELECT * FROM sanPham sp LEFT JOIN danhMucSP dm ON sp.maSP = dm.maSanPham WHERE sp.maSP = {$product_id}";
			}
			else
			{
				$sql = "SELECT * FROM sanPham sp LEFT JOIN danhMucSP dm ON sp.maSP = dm.maSanPham";
			}
			
			$result = mysql_query($sql,$conn);
			
			if (!$result) {
				die('Invalid query: ' . mysql_error());
			}
			
			$rows = mysql_num_rows($result);
						
			if ($rows > 0) {
				echo "
				<table data-toggle='table' data-url='tables/data1.json'  data-show-refresh='true' data-show-toggle='true' data-show-columns='true' data-search='true' data-pagination='true' data-sort-name='name' data-sort-order='desc'>
				<thead>
					<tr>
					<th data-field='state' data-checkbox='true' >Item ID</th>
					<th data-field='maSP'>Mã sản phẩm</th>
					<th data-field='tenSP' data-sortable='true'>Tên sản phẩm</th>
					<th data-field='moTa'>Mô tả</th>
					<th data-field='gia' data-sortable='true'>Giá</th>
					<th data-field='giamGia' data-sortable='true'>Giảm giá</th>
					<th data-field='soLuong'>Số lượng</th>
					<th data-field='daBan' data-sortable='true'>Đã bán</th>
					<th data-field='trangThaiSP' data-sortable='true'>Trạng thái</th>
					<th data-field='maTacGia'>Tác giả</th>
					<th data-field='hinhAnh'>Hình ảnh</th>
					<th data-field='danhGia' data-sortable='true'>Đánh giá</th>
					</tr>
				</thead>
				<tbody>";
			  while($product = mysql_fetch_array($result)) 
			  {
					echo "<tr>
						<td></td>
						<td class='text-center'>
							<a href='updateProduct.php?product_id={$product['maSP']}&author_id={$product['maTacGia']}&category_id={$product['maDanhMuc']}' class='text-color'>{$product['maSP']}</a>
						</td>
						<td>
							<a href='updateProduct.php?product_id={$product['maSP']}&author_id={$product['maTacGia']}&category_id={$product['maDanhMuc']}' class='text-color'>{$product['tenSP']}</a></td>
						<td>
							<a href='updateProduct.php?product_id={$product['maSP']}&author_id={$product['maTacGia']}&category_id={$product['maDanhMuc']}' class='text-color'>
								<p class='product-desc'>{$product['moTa']}</p>
							</a>
						</td>
						<td class='text-center'>
							<a href='updateProduct.php?product_id={$product['maSP']}&author_id={$product['maTacGia']}&category_id={$product['maDanhMuc']}' class='text-color'>{$product['gia']}.000</a>
						</td>
						<td class='text-center'>
							<a href='updateProduct.php?product_id={$product['maSP']}&author_id={$product['maTacGia']}&category_id={$product['maDanhMuc']}' class='text-color'>{$product['giamGia']}</a>
						</td>
						<td class='text-center'>
							<a href='updateProduct.php?product_id={$product['maSP']}&author_id={$product['maTacGia']}&category_id={$product['maDanhMuc']}' class='text-color'>{$product['soLuong']}</a>
						</td>
						<td class='text-center'>
							<a href='updateProduct.php?product_id={$product['maSP']}&author_id={$product['maTacGia']}&category_id={$product['maDanhMuc']}' class='text-color'>{$product['daBan']}</a>
						</td>
						<td class='text-center'>
							<a href='updateProduct.php?product_id={$product['maSP']}&author_id={$product['maTacGia']}&category_id={$product['maDanhMuc']}' class='text-color'>{$product['trangThaiSP']}</a>
						</td>
						<td class='text-center'>
							<a href='updateProduct.php?product_id={$product['maSP']}&author_id={$product['maTacGia']}&category_id={$product['maDanhMuc']}' class='text-color'>{$product['maTacGia']}</a>
						</td>
						<td><img src='../images/book/{$product['hinhAnh']}' width='100%' alt=''/></td>
						<td class='text-center'>
							<a href='updateProduct.php?product_id={$product['maSP']}&author_id={$product['maTacGia']}&category_id={$product['maDanhMuc']}' class='text-color'>{$product['danhGia']}</a>
						</td>
					  </tr>";
			  }
			 	echo "</tbody>
  				</table>";
			} else {
			  echo "Không có sản phẩm!";
			}
			
			$this->closeDB($conn);
        }
		
		public function showCategory($cate_check = 0)
		{
			$sql = "SELECT maDM, tenDM FROM danhMuc ";	
			$conn = $this->connect();	
			$result = mysql_query($sql, $conn);
			$row = mysql_num_rows($result);
			
			if($row > 0)
			{
				echo "<ul class='prod-category'>";
				while ($category = mysql_fetch_array($result))
				{			
				
					if($category['maDM'] == $row)
					{
						echo "<li class='last'><a href='?category={$category['maDM']}'>{$category['tenDM']}</li>";
					}
					else if($category['maDM'] == $cate_check)
					{
						echo "<li><a style='text-decoration: underline' href='?category={$category['maDM']}'>{$category['tenDM']}</li>";
					}
					else
					{
						echo "<li><a href='?category={$category['maDM']}'>{$category['tenDM']}</li>";
					}		
				}
				echo "</ul>";
			}
			else
			{
				echo "<li><a href='#'>Danh mục rỗng</li>";		
			}
			$this->closeDB($conn);
		}
		
		public function showProducts($cate_check = 0)
		{
			if($cate_check > 0)
			{
				$sql = "
					SELECT maSP, tenSP, danhGia, hinhAnh, gia, giamGia
					FROM sanPham sp left join danhMucSP dm ON sp.maSP = dm.maSanPham 
					WHERE maDanhMuc = {$cate_check}
				";	
			}
			else
			{
				$sql = "
					SELECT maSP, tenSP, danhGia, hinhAnh, gia, giamGia
					FROM sanPham sp left join danhMucSP dm ON sp.maSP = dm.maSanPham 
				";	
			}
			$conn = $this->connect();	
			$result = mysql_query($sql, $conn);
			$row = mysql_num_rows($result);
			
			if($row > 0)
			{
				echo "<ul class='products-grid'>";
				while ($product = mysql_fetch_array($result))
				{			
					$giaHienTai = $product['gia'] - $product['giamGia'];
					$danhGia = $product['danhGia'] * 20;
					echo 
					"
					<li class='item col-lg-3 col-md-3 col-sm-4 col-xs-6'>
                  <div class='item-inner'>
                    <div class='item-img'>
                      <div class='item-img-info'> <a href='product_detail.php?layid={$product['maSP']}' title='Sample Product' class='product-image'> <img src='images/book/{$product['hinhAnh']}' alt='Sample Product'> </a>
                        <div class='item-box-hover'>
                          <div class='box-inner'> <div class='actions'>
                            <div class='add_cart'>
									<a href='addToCart.php?product_id={$product['maSP']}&qty=1' class='btn-add-cart'><span><i class='fa-solid fa-cart-shopping'></i></span></a>
									
                            </div>
                            <div class='product-detail-bnt'><a href='quick_view.php?layid={$product['maSP']}' class='button detail-bnt'><span>Quick View</span></a></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class='item-info'>
                      <div class='info-inner'>
                        <div class='item-title'> <a href='product_detail.php?layid={$product['maSP']}' title='Sample Product'>{$product['tenSP']}</a> </div>
                        <div class='item-content'>
                          <div class='rating'>
                            <div class='ratings'>
                              <div class='rating-box'>
                                <div class='rating' style='width:{$danhGia}%'></div>
                              </div>
                              <p class='rating-links'> <a href='#'>1 Review(s)</a> <span class='separator'>|</span> <a href='#'>Add Review</a> </p>
                            </div>
                          </div>
                          <div class='item-price'>
                            <div class='price-box'> <span class='regular-price'> <span class='price'>{$giaHienTai}.000</span> </span> </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
					";		
				}
				echo "</ul>";
			}
			else
			{
				echo "Không có dữ liệu";		
			}
			$this->closeDB($conn);
		}
		
		public function getValue($sql)
		{
			$conn = $this->connect();
			$result = mysql_query($sql, $conn);
			$row = mysql_fetch_array($result);
			
			if($row > 0)
			{
				return $row[0];
			}
			else
			{
				return "Tất cả sách";
			}
			
			$this->closeDB($conn);
		}
		public function laygiatri($sql,$maKH)
		{
			
			 if($maKH<0)
			 {
				return 0;
			 }
			 else
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
		}
		public function subtotal($sql,$maKH)
		{
			if($maKH<0)
			{
				return 0;
			}
			else
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
				return  $thanhtien;
			}
			else
			{
				echo 'Không có dữ liệu';
			}
			$this->closeDB($link);
			}
		}
    }
?>