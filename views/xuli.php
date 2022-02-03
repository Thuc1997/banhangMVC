<?php
$url='localhost';
$username = "root";
$password = "";
$dbname = "hoyang";
$conn = mysqli_connect($url, $username, $password, $dbname);
/* Check connection */
if (!$conn) {
    die("Ket noi bi loi: " . mysqli_connect_error());
}


$coupon_code=$_POST['makm'];
$query=mysqli_query($conn,"select * from khuyenmai where makm='$coupon_code' and trangthai=1");
$row=mysqli_fetch_array($query);
if (mysqli_num_rows($query)>0){
	$data=array(
				"statusCode"=>200,
				"value"=>(int)$row['giatrikm'],
			);
}
else{
	$data=array("statusCode"=>201);
}
echo json_encode($data);


?>
 