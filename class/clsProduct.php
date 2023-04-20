<?php 
    include ("clsConnect.php");
    class product extends connectDB
    {
        public function  addProduct()
        {
            $conn = $this->connect();
			$this->closeDB($conn);
        }
		/*function themsuaxoa($sql)
		{
			$conn = $this->connect();

			if(mysql_query($sql, $con))
			{
				echo "<script> alert('Thêm sản phẩm thành công')</script>";		
			} 
			else
			{
				$error = mysql_error();
				echo $error;
				echo "<script> alert('Thêm sản phẩm thất bại {$error}')</script>";
			}
			
			$this->closeDB($con);
		}	
		
		function loadThongTin($sql)
		{
			$con = $this->connectDB();
			$result = mysql_query($sql, $con);
			$rows = mysql_num_rows($result);
			
			if($rows > 0)
			{
				echo "<select name='txtcongty' id='txtcongty'>
						<option value='0'>Chọn công ty</option>";
				while($info = mysql_fetch_array($result))
				{
					echo "<option value='{$info['id']}'> {$info['tenct']}</option>";
				}
				echo "</select>";
			}
			else
			{
				echo "Không có thông tin";	
			}
		}
		
		function uploadHinhAnh ($imgName, $folder, $tmpName)
		{			
			$newName = $folder . '/' . $imgName;
			$imgType = $_FILES["txthinhanh"]["type"];
			if($imgType == 'image/jpg' || $imgType == 'image/jpeg' || $imgType == 'image/png')
			{
				if(move_uploaded_file($tmpName, $newName))
				{
					return 1;	
				}
			} 
			else
			{
				return 0;
			}
		}
*/		
		public function  showProducts()
        {
            $conn = $this->connect();
			$sql = "SELECT * FROM Product";
			
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
							<td>descript</td>
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
						<td>{$product['ID']}</td>
						<td>{$product['title']}</td>
						<td style='height: 40px; overflow:hidden;'>{$product['description']}</td>
						<td>{$product['price']}</td>
						<td>{$product['discount']}</td>
						<td>{$product['quantity']}</td>
						<td>{$product['sold']}</td>
						<td>{$product['status']}</td>
						<td>{$product['author_id']}</td>
						<td>{$product['image']}</td>
						<td>{$product['rate']}</td>
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
