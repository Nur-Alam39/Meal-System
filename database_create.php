<!DOCTYPE html>
<html>
	<title>Database Create</title>
	<link rel="icon" href="meal_icon.png" />
	<head>
		<?php include "linker.php";
		
		?>
		<style>
			.col-lg-2
			{
				border-radius:10px;
				box-shadow:0 0 8px #999999;
				margin-right:3.3%;
				margin-top:2%;
				padding:2%;
			}
			.col-lg-2 img
			{
				width:80px;
				height:80px;
			}
			h4,h6{margin-top:10%;color:black}
		</style>
		<style>
		

		</style>
	</head>
	<body>
	
		<div class='container-fluid text-center' style='margin:0;margin-top:10%;margin-bottom:4%;padding-top:auto;padding-bottom:auto;list-style:none;'>
			<div class='container-fluid ' style='margin:0;padding:0;padding-left:20%;padding-right:20%;'>
				<h4>System has been created successfully.</h4>
				<div class="check_mark">
				  <div class="sa-icon sa-success animate">
					<span class="sa-line sa-tip animateSuccessTip"></span>
					<span class="sa-line sa-long animateSuccessLong"></span>
					<div class="sa-placeholder"></div>
					<div class="sa-fix"></div>
				  </div>
				</div>
			</div>
			<?php 
				$name=$_POST['name'];
				$password=$_POST['password'];
				$month=$_POST['month'];
				$meal_charge=$_POST['meal_charge'];
				$extra_charge=$_POST['extra_charge'];
				$dept=$_POST['dept'];
				$year=$_POST['year'];
				$day=$_POST['day'];
				$tbl_ext=$month.$year.$dept;
				echo "<li>Manager: ".$name."</li>
					  <li>Month: ".$month.", ".$year." </li>
					  <li>Password: ".$password."</li>
					  <li>Initial Meal Charge: ".$meal_charge."</li>
					  <li>Initial Extra charge: ".$extra_charge."</li>
					  <li>Department: ".$dept."</li>
					  <li>Starting Day: ".$day."</li>
					  <li>Table name extention: ".$tbl_ext."</li>
					  ";
				
				$table_for_meal="create table daily_meal(
														id int not null,
														Name varchar(255) not null,
														Day01 int not null,Day02 int not null,Day03 int not null,Day04 int not null,Day05 int not null,Day06 int not null,Day07 int not null,Day08 int not null,Day09 int not null,Day10 int not null,
														Day11 int not null,Day12 int not null,Day13 int not null,Day14 int not null,Day15 int not null,Day16 int not null,Day17 int not null,Day18 int not null,Day19 int not null,Day20 int not null,
														Day21 int not null,Day22 int not null,Day23 int not null,Day24 int not null,Day25 int not null,Day26 int not null,Day27 int not null,Day28 int not null,Day29 int not null,Day30 int not null,
														Day31 int not null)";
				$table_for_deposits="create table daily_deposite(
														id int not null,
														Name varchar(255) not null,
														Day01 int not null,Day02 int not null,Day03 int not null,Day04 int not null,Day05 int not null,Day06 int not null,Day07 int not null,Day08 int not null,Day09 int not null,Day10 int not null,
														Day11 int not null,Day12 int not null,Day13 int not null,Day14 int not null,Day15 int not null,Day16 int not null,Day17 int not null,Day18 int not null,Day19 int not null,Day20 int not null,
														Day21 int not null,Day22 int not null,Day23 int not null,Day24 int not null,Day25 int not null,Day26 int not null,Day27 int not null,Day28 int not null,Day29 int not null,Day30 int
													)";
				$table_for_others="create table others_info(
														Month varchar(255) not null,
														Year varchar(255) not null,
														Name varchar(255) not null,
														Password varchar(255) not null,
														Meal_charge int not null,
														Extra_charge int not null,
														Deparment varchar(255),
														Current_day varchar(255)
													)";
				mysqli_query($connect, $table_for_meal);
				mysqli_query($connect, $table_for_deposits);
				mysqli_query($connect, $table_for_others);
				$others_info_table_name="".$tbl_ext."_others_info";
				$sql="insert into others_info (Month,Name,Password,Year,Meal_charge,Extra_charge,Current_day,Department) 
										values('$month','$name','$password','$year','$meal_charge','$extra_charge','$day','$dept')";
				mysqli_query($connect, $sql);
			?>
			<h4 style='margin-top:5%'><p style='color:#000;margin-top:2%'><img src='meal_icon.png' style='width:;height:;margin-right:1%'/>Meal System</p></h4>
		</div>
		<?php include "footer.php";?>
	</body>
</html>