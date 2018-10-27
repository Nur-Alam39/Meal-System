<!DOCTYPE html>
<html>
	<title>Updated Information | Meal System</title>
	<link rel="icon" href="meal_icon.png" />
	<head>
		<?php include "linker.php";?>
		<style>
			.col-lg-2
			{
				border-radius:10px;
				box-shadow:0 0 8px #999999;
				margin-right:3.3%;
				margin-top:2%;
				padding:0;
				padding-top:2%;
				padding-right:0;
			}
			.col-lg-2 img
			{
				width:80px;
				height:80px;
			}
			h4,h6{margin-top:10%;color:black}
			#triangle-bottomright {
				width: 0;
				height: 0;
				background-color:;
				border-bottom: 10px solid #b3b3b3;
				border-left: 10px solid transparent;
				border-bottom-right-radius: 10px;
				float:right;
			}
		</style>
	</head>
	<body>	
			<div class='container-fluid text-center' style='margin:0;margin-top:8%;margin-bottom:10%'>
			<h4 style='color:black'>Information Updated</h4>
			<div class='container-fluid text-center' style='margin:0;padding:0;padding-left:%;margin-top:2%'>
				<div class="check_mark">
				  <div class="sa-icon sa-success animate">
					<span class="sa-line sa-tip animateSuccessTip"></span>
					<span class="sa-line sa-long animateSuccessLong"></span>
					<div class="sa-placeholder"></div>
					<div class="sa-fix"></div>
				  </div>
				</div>
					<?php		
					$c_day=$_POST['u_day'];
					$u_month=$_POST['u_month'];
					$u_year=$_POST['u_year'];
					$m_charge=$_POST['u_m_charge'];
					$e_charge=$_POST['u_e_charge'];
					$u_dept_name=$_POST['u_dept_name'];
					$u_m_name=$_POST['u_m_name'];
					if($m_charge!=NULL)
					{
						$sql="update others_info set Meal_charge=$m_charge";
						mysqli_query($connect, $sql);
						echo "<h6> Meal charge has been updated to $m_charge.</h6>";
					}
					if($e_charge!=NULL)
					{
						$sql="update others_info set Extra_charge=$e_charge";
						mysqli_query($connect, $sql);
						echo "<h6>Extra charge has been updated to $e_charge.</h6>";
					}
					if($c_day!='')
					{
						$sql="update others_info set Current_day='$c_day'";
						mysqli_query($connect, $sql);
						echo "<h6>It's now $c_day.<br></h6>";
					}
					if($u_month!='')
					{
						$sql="update others_info set Month='$u_month'";
						mysqli_query($connect, $sql);
						echo "<h6>Month has been updated to $u_month.</h6>";
					}
					if($u_year!='')
					{
						$sql="update others_info set Year='$u_year'";
						mysqli_query($connect, $sql);
						echo "<h6>Year has been updated to $u_year.</h6>";
					}
					if($u_dept_name!='')
					{
						$sql="update others_info set Department='$u_dept_name'";
						mysqli_query($connect, $sql);
						echo "<h6>Department has been updated to $u_dept_name.</h6>";
					}
					if($u_m_name!='')
					{
						$sql="update others_info set Name='$u_m_name'";
						mysqli_query($connect, $sql);
						echo "<h6>Manager name has been updated to $u_m_name.</h6>";
					}
					?>
			</div>
		</div>
		<?php include "footer.php";?>
	</body>
</html>