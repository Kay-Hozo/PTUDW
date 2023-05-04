<?php
	class login
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
		
		public function mylogin($user, $pass)
		{
			$conn = $this->connect();
			$pass = SHA1($pass);
			if($user != '' && $pass != '')
			{
				$sql = "SELECT maTK, tenTK, matKhau, ten, phanQuyen FROM taiKhoan WHERE tenTK = '$user' AND matKhau = '$pass' LIMIT 1";
				$result = mysql_query($sql, $conn);
				$row = mysql_num_rows($result);
				var_dump();
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
					echo "<script> alert('Sai username hoặc password')</script>";
				}		
			}
			else
			{
				echo "<script> alert('Username hoặc password không được để trống!')</script>";	
			}
			$this->closeDB($conn);		
		}
		
		public function confirmLogin($id, $user, $pass, $ten, $quyen)
		{
			$conn = $this->connect();
			$sql = "SELECT maTK FROM taiKhoan WHERE maTK = {$id} AND tenTK = '{$user}' AND matKhau = '${pass}' AND ten = '{$ten}' AND phanQuyen = $quyen LIMIT 1";	
			$result = mysql_query($sql, $conn);
			$row = mysql_num_rows($result);
			
			if($row != 1)
			{
				echo "<script>
					window.location.replace('./login.php');
				</script>";
			}
			
			$this->closeDB($conn);	
		}	
		
		public function logout() 
		{
			session_destroy();
			echo "<script>window.location.replace('./index.php')</script>";
			exit();
		}
		
		public function mySignup($user, $pass, $ho, $ten, $sdt, $quocGia, $tinh, $phuong, $quan, $diaChi, $email)
		{
			$conn = $this->connect();
			
			$sqlSignUp = "insert into taiKhoan
			(`tenTK`, `matKhau`, `ho`, `ten`, `sdt`, `quocgia`, `tinh_thanhpho`, `phuong_xa`, `quan_huyen`, `diaChi`, `email`)
			 values
			('{$user}', SHA1('{$pass}'), N'{$ho}', N'{$ten}', '{$sdt}', '{$quocGia}', '{$tinh}', '{$phuong}', '{$quan}', '{$diaChi}', '{$email}')";
			$result = mysql_query($sqlSignUp, $conn);
			
			if($result)
			{
				echo "<script>alert('Đăng ký thành công!')</script>";
				$this->mylogin($user, $pass);
			}
			else
			{
				echo "<script> alert('Đăng ký không thành công')</script>";
			}		
			
			$this->closeDB($conn);		
		}

	}
?>