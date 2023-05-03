<?php
	class signin
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
		
		public function mysignup($user, $pass)
		{
			$conn = $this->connect();
			$pass = SHA1($pass);
			if($user != '' && $pass != '')
			{
				$sql = "SELECT maTK, tenTK, matKhau, ten, phanQuyen FROM taiKhoan WHERE tenTK = '$user' AND matKhau = '$pass' LIMIT 1";
				$result = mysql_query($sql, $conn);
				$row = mysql_num_rows($result);
				
				if($row == 1)
				{
					session_start();
					while($account = mysql_fetch_array($result))
					{
						$_SESSION["id"] = $account["maTK"];	
						$_SESSION["user"] = $account["tenTK"];	
						$_SESSION["pass"] = $account["matKhau"];	
						$_SESSION["ten"] = $account["ten"];	
						$_SESSION["quyen"] = $account["phanQuyen"];
						
					}
					echo "<script> window.location.replace('index.php')</script>";
				}
				else
				{
					echo "<script> alert('Thông tin chưa đúng')</script>";
				}		
			}
			else
			{
				echo "<script> alert('Không được để trống!')</script>";	
			}
			$this->closeDB($conn);		
		}

		public function themTK($sql)
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
	}
?>