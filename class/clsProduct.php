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
				echo "<table width='100%' border='1' cellspacing='0' cellpadding='0'>
						<tbody>
						  <tr>
							<td width='36'>STT</td>
							<td width='52'>Title</td>
							<td width='150'>descript</td>
							<td width='20'>price</td>
							<td width='20'>discount</td>
							<td width='20'>quantity</td>
							<td width='20'>sold</td>
							<td width='20'>status</td>
							<td width='20'>author_id</td>
							<td width='40'>image</td>
							<td width='20'>rate</td>
						  </tr>";
			  while($product = mysql_fetch_array($result)) 
			  {
				  
					echo "<tr>
						<td>{$product['maSP']}</td>
						<td>{$product['tenSP']}</td>
						<td style='height: 40px; overflow:hidden;'>{$product['moTa']}</td>
						<td>{$product['gia']}</td>
						<td>{$product['giamGia']}</td>
						<td>{$product['soLuong']}</td>
						<td>{$product['daBan']}</td>
						<td>{$product['trangThaiSP']}</td>
						<td>{$product['maTacGia']}</td>
						<td><img src='./images/book/{$product['hinhAnh']}' width='100%' alt=''/></td>
						<td>{$product['danhGia']}</td>
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