<!DOCTYPE html>
<html>
	<title>Meal System</title>
	<link rel="icon" href="meal_icon.png" />
	<head>
		<?php include "linker.php";?>
		<style>
		</style>
	</head>
	<body>
	</body>
</html>
<?php
$member_id = $_POST['member_id'];
$sql = "select * from members_info where id=$member_id";
$result = mysqli_query($connect,$sql);
$response = "<div>";
while( $row = mysqli_fetch_array($result) ){
	 $id = $row['id'];
	 $name = $row['Name'];
	 $mobile = $row['Mobile'];
	 $hall = $row['Hall'];
	 $room = $row['Room'];
	 /*$image = $row['mage'];*/
	$response .="
	<div class='media'>
		<img class='align-self-start mr-3' style='border-radius:50%;height:200px;width:200px' src='members/nur.jpg'>
		<div class='media-body' style='text-align:left;list-style:none'>
			<h5 class='mt-0'>".$name."</h5>
			<li>Total meal: 16</li>
			<li>Total deposit: 1400 Tk</li>
			<li>Total cost: 1250 Tk</li>
			<li>Account: 150 Tk</li>
			<li>Days: 6 days</li>
			<h6>Contact:</h6>
			<li>Hall name: ".$hall."</li>
			<li>Room no. ".$room."</li>
			<li>Mobile no. ".$mobile."</li>
		</div>
	</div>";
}
$response .= "</div>";

echo $response;
exit;
	