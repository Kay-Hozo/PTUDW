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
		
		public function showOptionsInSelect($sql, $tenSelect)
		{
			$conn = $this->connect();
			$result = mysql_query($sql, $conn);
			$row = mysql_num_rows($result);
			if($row > 0)
			{
				echo "<select name='{$tenSelect}' id='{$tenSelect}'>";
				
				while($option = mysql_fetch_array($result))
				{
					echo "<option value='{$option['0']}'>{$option['1']}</option>";
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
		
		public function  showProducts()
        {
            $conn = $this->connect();
			$sql = "SELECT * FROM sanPham";
			
			$result = mysql_query($sql,$conn);
			
			if (!$result) {
				die('Invalid query: ' . mysql_error());
			}
			
			$rows = mysql_num_rows($result);
						
			if ($rows > 0) {
				echo "
				<form method='POST'>
				<input type='submit' name='btnSP' value='Cập nhật sản phẩm'>
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
						<td><input data-index='0' name='toolbar1' type='checkbox' value='{$product['maSP']}'></td>
						<td class='text-center'>{$product['maSP']}</td>
						<td>{$product['tenSP']}</td>
						<td><p class='product-desc'>{$product['moTa']}</p></td>
						<td class='text-center'>{$product['gia']}.000</td>
						<td class='text-center'>{$product['giamGia']}</td>
						<td class='text-center'>{$product['soLuong']}</td>
						<td class='text-center'>{$product['daBan']}</td>
						<td class='text-center'>{$product['trangThaiSP']}</td>
						<td class='text-center'>{$product['maTacGia']}</td>
						<td><img src='../images/book/{$product['hinhAnh']}' width='100%' alt=''/></td>
						<td class='text-center'>{$product['danhGia']}</td>
					  </tr>";
			  }
			 	echo "</tbody>
  				</table>
				</form>";
			} else {
			  echo "Không có sản phẩm!";
			}
			
			$this->closeDB($conn);
        }
    }
?>