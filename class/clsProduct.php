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
		
		public function  showProducts($product_id=0)
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
    }
?>