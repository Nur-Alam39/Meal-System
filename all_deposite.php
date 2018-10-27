<!DOCTYPE html>
<html>
	<title>Deposits | Meal System</title>
	<link rel="icon" href="meal_icon.png" />
	<head>
		<?php include "linker.php";?>
	</head>
	<body >
	<!--Reset all deposit modal-->
			<div class="modal fade" id="ModalforResetDeposit" >
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title" style='color:#000'>Reset Deposit</h4>
							<button type="button" class="close" data-dismiss="modal">&times;</button>
						</div>
						<div class="modal-body" id="deposit">
							<form id="reset_deposit_form" method="post">
								<div class="container">
									<div class='row' style='margin:0;padding:0;'>
										<div class='col-lg-3'>
											Name: &ensp;<select  style="margin-top:px;color:#333333;"  class='form-control' id="name" name="name">
												<option value="">NULL</option>
												<?php
													$sql = "SELECT * FROM daily_deposite order by id";
													$records=mysqli_query($connect,$sql);
													while($data=mysqli_fetch_array($records))
													{
														echo "<option value='".$data['Name']."'>".$data['Name']."</option>";		
													}
												?>
											</select>
										</div>
										<div class='col-lg-3'>
											<input type='hidden' name='action' id='action' value="reset"/>
											<input type='hidden' name='deposite_m' id='deposite_m'/>
											<input type='submit' name='reset' id='reset' value='Reset' class='btn btn-warning btn-md' style='margin-top:15%' align='center'/>
										</div>
									</div>
								</div>
							</form >
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>
	<!--Update meal modal-->
			<div class="modal fade" id="ModalforDeposite" >
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title" style='color:#000'>Deposit Money</h4>
							<button type="button" class="close" data-dismiss="modal">&times;</button>
						</div>
						<div class="modal-body" id="deposite">
							<form id="money_deposite_form" method="post">
								<?php 
									$sql = "SELECT * FROM daily_deposite";
									$records=mysqli_query($connect,$sql);
								?>
								<div class="container">
									<div class='row' style='margin:0;padding:0;'>
										<div class='col-lg-5' style='background-color:#'>
											<label class="col-lg-6 col-form-label" style='font-weight:bold;'>Select Day:</label>
											<div class="col-lg-12" style='background-color:#'>
											  <select class='form-control' id="day" name="day" ng-model='day'>
													<option value='Day01'>Day01</option>
													<option value='Day02'>Day02</option>
													<option value='Day03'>Day03</option>
													<option value='Day04'>Day04</option>
													<option value='Day05'>Day05</option>
													<option value='Day06'>Day06</option>
													<option value='Day07'>Day07</option>
													<option value='Day08'>Day08</option>
													<option value='Day09'>Day09</option>
													<option value='Day10'>Day10</option>
													<option value='Day11'>Day11</option>
													<option value='Day12'>Day12</option>
													<option value='Day13'>Day13</option>
													<option value='Day14'>Day14</option>
													<option value='Day15'>Day15</option>
													<option value='Day16'>Day16</option>
													<option value='Day17'>Day17</option>
													<option value='Day18'>Day18</option>
													<option value='Day19'>Day19</option>
													<option value='Day20'>Day20</option>
													<option value='Day21'>Day21</option>
													<option value='Day22'>Day22</option>
													<option value='Day23'>Day23</option>
													<option value='Day24'>Day24</option>
													<option value='Day25'>Day25</option>
													<option value='Day26'>Day26</option>
													<option value='Day27'>Day27</option>
													<option value='Day28'>Day28</option>
													<option value='Day29'>Day29</option>
													<option value='Day30'>Day30</option>
													<option value='Day31'>Day31</option>
												</select>
											</div>
										</div>
										<div class='col-lg-2'>
											<label style='font-weight:bold;' class='col-form-label'>ID:</label> 
											<select  style="margin-top:px;color:#333333;"  class='form-control' id="id" name="id">
												<option value="">NULL</option>
												<?php
													while($data=mysqli_fetch_array($records))
													{
														echo "<option value='".$data['id']."'>".$data['id']."</option>";		
													}
												?>
											</select>
										</div>
										<div class='col-lg-3'>
											<label style='font-weight:bold;' class='col-form-label'>Name:</label> 
											<select  style="margin-top:px;color:#333333;"  class='form-control' id="name" name="name">
												<option value="">NULL</option>
												<?php
													$sql = "SELECT * FROM daily_deposite order by id";
													$records=mysqli_query($connect,$sql);
													while($data=mysqli_fetch_array($records))
													{
														echo "<option value='".$data['Name']."'>".$data['Name']."</option>";		
													}
												?>
												<option value="all">All</option>
											</select>
										</div>
										<div class='col-lg-2'>
											<label style='font-weight:bold;' class='col-form-label'>Amount:</label> 
											<input  type='text' class='form-control' id="amount" name="amount">
										</div>
									</div>
									<div class='text-center' class='col-form-label'>
										<input type='hidden' name='action' id='action' value="add"/>
										<input type='hidden' name='deposite_m' id='deposite_m'/>
										<input type='submit' name='add' id='add' value='Add' class='btn btn-success btn-sm' style='margin-top:5%' align='center'/>
									</div>
								</div>
							</form >
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>
		<div class='container-fluid text-center' style='margin:0;margin-top:8%;margin-bottom:2%'>
			<?php echo"<h6 style='color:black'>Month: ".$month.", ".$year."</h6>"; ?>
			<h4 style='color:black'>Deposit Information</h4>
			<a class="btn btn-primary btn-sm" style='color:white' data-toggle='modal' id='update_meal' name='update_meal' data-target='#ModalforDeposite'>Add Deposit</a>
			<a class="btn btn-dark btn-sm" style='color:white' data-toggle='modal' id='reset_deposit' name='reset_deposit' data-target='#ModalforResetDeposit'>Reset Deposit</a>
		</div>
		<div class='container-fluid text-center' id='all_members_deposite' style='margin:0;margin-top:3%;margin-bottom:2%'>
		
		</div>
		<?php include "footer.php";?>
	</body>
	<script>
	$(document).ready(function(){
		fetch_data();
		function fetch_data()
		{
			var action="fetch";
			$.ajax({
				url:"deposite_action.php",
				method:"POST",
				data:{action:action},
				success:function(data)
				{
					$('#all_members_deposite').html(data);
				}
			})
		}
		$('#add').click(function(){
			$('#ModalforDeposite').modal('show');
			$('#money_deposite_form')[0].reset();
			$('.modal-title').text("Deposite Money"); 
			$('#member_id').val('');
			$('#action').val('add');
			$('#add').val('Add');
		});
		$('#money_deposite_form').submit(function(event){
			event.preventDefault();
			var day=$('#day').val();
			var meal_no=$('#amount').val();
			var id=$('#id').val();
			var name=$('#name').val();
			if(name=='')
			{
				alert("Please enter name.");
				return false;
			}
			else if(id=='')
			{
				alert("Please enter id.");
				return false;
			}
			else if(day=='')
			{
				alert("Please enter day.");
				return false;
			}
			else if(meal_no=='')
			{
				alert("Please enter amount.");
				return false;
			}
			else
			{
				$.ajax({
					 url:"deposite_action.php",
					 method:"POST",
					 data:new FormData(this),
					 contentType:false,
					 processData:false,
					 success:function(data)
					 {
					  fetch_data();
					  $('#money_deposite_form')[0].reset();
					  $('#ModalforDeposite').modal('hide');
					  alert('Meals of '+day+'is updated');
					 }
					});
			}
		});
		$('#reset_deposit_form').submit(function(event){
			event.preventDefault();
			var name=$('#name').val();
			if(name=='')
			{
				alert("Please enter name.");
				return false;
			}
			else
			{
				alert("Are you sure reset all deposits of "+name);
				$.ajax({
					 url:"deposite_action.php",
					 method:"POST",
					 data:new FormData(this),
					 contentType:false,
					 processData:false,
					 success:function(data)
					 {
					  fetch_data();
					  $('#reset_deposit_form')[0].reset();
					  $('#ModalforResetDeposit').modal('hide');
					 }
					});
				alert("Deposits of "+name+ " has updated");
			}
		});
	});
	</script>
</html>