<?php 
    class conection{
        var $conn;
        function __construct(){
            //Thong so ket noi CSDL
            $severname ="localhost"; 
            $username ="root";
            $password =""; 
            $db_name ="hoyang";
 
            //Tao ket noi CSDL
            $this->conn = new mysqli($severname,$username,$password,$db_name);
            $this->conn->set_charset("utf8");

            //check connection
            if ($this->conn->connect_error) {
		        die("Ket noi co so du lieu that bai: " . $this->conn->connect_error);
		    }
        }

    }
?>