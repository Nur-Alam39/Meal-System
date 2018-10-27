<?php include "linker.php";?>
<!--Member details-->
	<div class="modal fade" id="ModalforMemberDetails" >
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" style='color:#000'>Member Details</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body" id="member_detail">
					<div class='media'>
						<img class='align-self-center' style='height:160px;width:160px;border-radius:50%' src='members/person.png'/>
						<div class='media-body' style='text-align:left;list-style:none;margin-left:4%'>
							<h5 style='margin-left:4%'>NurAlam</h5>
							<li style='margin-left:4%' class='fa fa-university' >&ensp;SDH</li>
							<li style='margin-left:4%' class='fa fa-bed'>&ensp;407</li>
							<li style='margin-left:4%' class='fa fa-phone'>&ensp;01911248212</li>
							<hr style='margin-left:4%;margin-top:10%'>&ensp;</hr>
							<div class='row text-center' style='margin:0;padding:0;margin-left:-4%;'>
								<div class='col-sm-3'>
									<h6>Meal</h6>
									<img src='meal.png' style='width:30px;height:30px;margin-bottom:10%'/>
									<h6>No. 17</h6>
								</div>
								<div class='col-sm-3'>
									<h6>Cost</h6>
									<img src='cost.png' style='width:30px;height:30px;margin-bottom:10%'/>
									<h6>BDT: 1260</h6>
								</div>
								<div class='col-sm-3'>
									<h6>Deposit</h6>
									<img src='deposite.png' style='width:30px;height:30px;margin-bottom:10%'/>
									<h6>BDT: 1400</h6>
								</div>
								<div class='col-sm-3'>
									<h6>Account</h6>
									<img src='account.png' style='width:30px;height:30px;margin-bottom:10%'/>
									<h6>BDT: 160</h6>
								</div>
							</div>
							<div class='container-fluid' style='text-align:left;margin:0;padding:0;margin-top:3%;margin-left:4%;list-style:none;'>
								
							</div>
							<!--<li>Total meal: 16</li>
							<li>Total deposit: 1400 Tk</li>
							<li>Total cost: 1250 Tk</li>
							<li>Account: 150 Tk</li>
							<li>Days: 6 days</li>
							<h6>Contact:</h6>
							<li>Hall name: SDH</li>
							<li>Room no. 407</li>
							<li class='fa fa-phone'>&ensp;01911248212</li>-->
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
<?php
$msg = "";
if(isset($_POST["action"]))
{
	if($_POST["action"]=="fetch")
	{
		$query="select * from daily_meal order by id";
		$result=mysqli_query($connect,$query);
		$output=
		'
			<table class="table table-striped table-bordered" style="margin:0;margin-top:1%;margin-right:%">
				<thead>
				  <tr>
					<th>#</th>
					<th>Name</th>
					<th>Total meal</th>
					<th>Meal charge</th>
					<th>Extra charge</th>
					<th>Total cost</th>
					<th>Total deposit</th>
					<th>Account</th>
					<th>Days</th>
				  </tr>
				</thead>
		';
		$sql2 = "select * from daily_deposite order by id";
		$qty=array_fill(0, 31, 0);
		$meal_per_member=array_fill(0, 31, 0);
		$j=0;
		$total_member=0;
		$deposite_per_member=array_fill(0, 31, 0);
		$day_name=array("Day01","Day02","Day03","Day04","Day05","Day06","Day07","Day08","Day09","Day10",
						"Day11","Day12","Day13","Day14","Day15","Day16","Day17","Day18","Day19","Day20",
						"Day21","Day22","Day23","Day24","Day25","Day26","Day27","Day28","Day29","Day30","Day31");
		$records2=mysqli_query($connect,$sql2);
		while($data=mysqli_fetch_array($result))
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
			$id=$data['id'];
			$name=$data['Name'];
			$total_cost=$meal_charge*$meal_per_member[$j]+$extra_charge;
			for($i=0;$i<30;$i++)
			{
				$deposite_per_member[$j]+=$data2[$day_name[$i]];
			}
			$amount_due=$deposite_per_member[$j]-$total_cost;
			$amount_due=round($amount_due,0,PHP_ROUND_HALF_UP);
			$days=0;
			if($amount_due>0&&$meal_charge>0)
			{
				$days=$amount_due/$meal_charge;
				$days=intval($days);
			}
			$clr="black";
			if($amount_due<=$meal_charge)$clr="red";
			$output .='
			
				<tr>
					<td>'.$id.'</td>
					<td style="font-size:px">
						<p href="" class="member_details_info" style="color:black;text-decoration:"  data-toggle="" 
						   data-target="#ModalforMemberDetails" id="member_'.$id.'">'.$name.'
						</p>
					</td>
					<td>'.$meal_per_member[$j].'</td>
					<td>'.$meal_charge.'</td>
					<td>'.$extra_charge.'</td>
					<td>'.$total_cost.'</td>
					<td>'.$deposite_per_member[$j].'</td>
					<td style="color:'.$clr.'">'.$amount_due.'</td>
					<td style="color:'.$clr.'">'.$days.'</td>
				</tr>
			';
			$j++;
		}
		$output .='</table>';
		echo $output;
	}
	if($_POST["action"] == "insert")
	{
	  $name=$_POST["name"];
	  $id=$_POST["id"]; 
	  $query = "insert into daily_meal(id,Name) values ('$id','$name')";
	  $query2 = "insert into daily_deposite(id,Name) values ('$id','$name')";
	  mysqli_query($connect, $query);
	  mysqli_query($connect, $query2);
	}
	if($_POST["action"] == "delete")
	{
	  $name=$_POST["name"];
	  $query = "delete from daily_meal where Name='$name'";
	  $query2 = "delete from daily_deposite where Name='$name'";
	  mysqli_query($connect, $query);
	  mysqli_query($connect, $query2);
	}
}
?>
<script>
	//for members info
			$(document).ready(function(){
			 $('.member_details_info').click(function(){
			   var id = this.id;
			   var splitid = id.split('_');
			   var member_id = splitid[1];
			   alert(member_id);
			   // AJAX request
			   $.ajax({
				url: 'member_info.php',
				type: 'post',
				data: {member_id: member_id},
				success: function(response){ 
				  // Add response in Modal body
				  $('#member_detail').html(response);

				  // Display Modal
				  $('#ModalforMemberDetails').modal('show'); 
				}
			  });
			 });
			});
</script>