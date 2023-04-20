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
                mysql_set_charset('utf8_unicode_ci',$conn);
				return $conn;
			}
        }

        public function closeDB($conn)
		{
			mysql_close($conn);	
		}
    }
?>