<!DOCTYPE html>
<html>
	<title>Meal System</title>
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
				padding-left:0;
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
			<?php echo"<h4 style='color:black'>Month: ".$month.", ".$year."</h4>
						<h6 style='color:black'>Department: ".$dept." &ensp; Sub-Manager: ".$name."</h6>
						";
			?>
			<div class='row text-center' style='margin:0;padding:0;padding-left:2%;'>
					<?php		
					$sql = "SELECT * FROM daily_meal";
					$sql2 = "SELECT * FROM daily_deposite";
					$qty=array_fill(0, 30, 0);
					$meal_per_member=array_fill(0, 31, 0);
					$j=0;
					$total_meal=0;
					$total_deposite=0;
					$total_member=0;
					$total_cost=0;
					$qty=array_fill(0, 31, 0);
					$deposite_per_member=array_fill(0, 31, 0);
					$day_name=array("Day01","Day02","Day03","Day04","Day05","Day06","Day07","Day08","Day09","Day10",
									"Day11","Day12","Day13","Day14","Day15","Day16","Day17","Day18","Day19","Day20",
									"Day21","Day22","Day23","Day24","Day25","Day26","Day27","Day28","Day29","Day30","Day31");
					$records=mysqli_query($connect,$sql);
					$records2=mysqli_query($connect,$sql2);
					while($data=mysqli_fetch_array($records))
					{ 
						$total_member++;
						$data2=mysqli_fetch_array($records2);
						for($i=0;$i<30;$i++)
						{
							$qty[$i]+=$data[$day_name[$i]];
						}
						for($i=0;$i<30;$i++)
						{
							$meal_per_member[$j]+=$data[$day_name[$i]];
						}
						$total_cost+=$meal_charge*$meal_per_member[$j]+$extra_charge;
						for($i=0;$i<30;$i++)
						{
							$deposite_per_member[$j]+=$data2[$day_name[$i]];
						}
						$amount_due=$deposite_per_member[$j]-$total_cost;
						$total_deposite+=$deposite_per_member[$j];
						$total_meal+=$meal_per_member[$j];
						$j++;
					}
					$account=$total_deposite-$total_cost;
					$account=round($account,2);
					echo"<div class='col-lg-2 swing-in-top-fwd' style='padding-right:0%;padding-left:0'>
							<h5>Total Member</h5>
							<img src='members.png'/>
							<h4>No.".$total_member."</h4>
							<div id='triangle-bottomright'></div>
						</div>
						<div class='col-lg-2 swing-in-top-fwd' style='padding-right:0%;padding-left:0%;'>
							<h5>Total Day</h5>
							<img src='day.png'/>
							<h4>".$current_day."</h4>
							<div id='triangle-bottomright'></div>
						</div>
						<div class='col-lg-2 swing-in-top-fwd' style='padding-right:0%;padding-left:0%;'>
							<h5>Total Meal</h5>
							<img src='meal1.png'/>
							<h4>No. ".$total_meal."</h4>
							<div id='triangle-bottomright'></div>
						</div>
						<div class='col-lg-2 swing-in-top-fwd' style='padding-right:0%;padding-left:0%;'>
							<h5>Meal Charge </h5>
							<img src='deposit.png'/>
							<h4>BDT: ".$meal_charge."/-</h4>
							<div id='triangle-bottomright'></div>
						</div>
						<div class='col-lg-2 swing-in-top-fwd' style='padding-right:0%;padding-left:0%;'>
							<h5>Extra Charge</h5>
							<img src='extra2.png'/>
							<h4>BDT: ".$extra_charge."/-</h4>
							<div id='triangle-bottomright'></div>
						</div>
						<div class='col-lg-2 swing-in-top-fwd' style='padding-right:0%;padding-left:0%;'>
							<h5>Total Cost</h5>
							<img src='cost.png'/>
							<h4>BDT: ".$total_cost."/-</h4>
							<div id='triangle-bottomright'></div>
						</div>
						<div class='col-lg-2 swing-in-top-fwd' style='padding-right:0%;padding-left:0%;'>
							<h5>Total Deposit</h5>
							<img src='deposite.png'/>
							<h4>BDT: ".$total_deposite."/-</h4>
							<div id='triangle-bottomright'></div>
						</div>
						<div class='col-lg-2 swing-in-top-fwd' style='padding-right:0%;padding-left:0%;'>
							<h5>Account</h5>
							<img src='account.png'/>
							<h4>BDT: ".$account."/-</h4>
							<div id='triangle-bottomright'></div>
						</div>
						<!--<div class='col-lg-2' style='padding-right:0%;padding-left:0%;'>
							<h5>Others </h5>
							<img src='account.png'/>
							<h4>Text</h4>
						</div>
						<div class='col-lg-2' style='padding-right:0%;padding-left:0%;'>
							<h5>Others </h5>
							<img src='account.png'/>
							<h4>Text</h4>
						</div>-->";
					?>
			</div>
		</div>
		<?php include "footer.php";?>
	</body>
</html>