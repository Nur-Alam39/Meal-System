<!DOCTYPE html>
<html>
	<title>Update | Meal System</title>
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
				padding:2%;
			}
			.col-lg-2 img
			{
				width:80px;
				height:80px;
			}
			h4,h6{margin-top:10%;color:black}
		</style>
	</head>
	<body>	
		<div class='container-fluid ' style='margin:0;margin-top:8%;margin-bottom:4%'>
			<h4 class='text-center'>Update Information</h4>
			<?php 
				echo"<div class='text-center' style='margin:2%'><h5>Curent Information</h5><h6 style='margin-top:2%;color:black'>Month: ".$month.", ".$year."
					&emsp;".$current_day." &emsp;Meal charge: BDT. ".$meal_charge."&emsp;Extra charge: BDT. ".$extra_charge."</h6>
					</div>";
			?>
			<div class='scale-in-center' style='margin:0;padding:0;margin-left:20%;margin-right:20%;padding:2%;border-radius:10px;box-shadow:0 0 8px #999'>
				<form action="after_update.php" method='post' id='create_form'>
				   <div class="form-row">
					<div class="form-group col-md-2">
					  <label>Current day:</label>
					  <select id="u_day" name='u_day' class="form-control">
						<option value='' >Choose...</option>
						<option value='Day 01'>Day 01</option>
						<option value='Day 02'>Day 02</option>
						<option value='Day 03'>Day 03</option>
						<option value='Day 04'>Day 04</option>
						<option value='Day 05'>Day 05</option>
						<option value='Day 06'>Day 06</option>
						<option value='Day 07'>Day 07</option>
						<option value='Day 08'>Day 08</option>
						<option value='Day 09'>Day 09</option>
						<option value='Day 10'>Day 10</option>
						<option value='Day 11'>Day 11</option>
						<option value='Day 12'>Day 12</option>
						<option value='Day 13'>Day 13</option>
						<option value='Day 14'>Day 14</option>
						<option value='Day 15'>Day 15</option>
						<option value='Day 16'>Day 16</option>
						<option value='Day 17'>Day 17</option>
						<option value='Day 18'>Day 18</option>
						<option value='Day 19'>Day 19</option>
						<option value='Day 20'>Day 20</option>
						<option value='Day 21'>Day 21</option>
						<option value='Day 22'>Day 22</option>
						<option value='Day 23'>Day 23</option>
						<option value='Day 24'>Day 24</option>
						<option value='Day 25'>Day 25</option>
						<option value='Day 26'>Day 26</option>
						<option value='Day 27'>Day 27</option>
						<option value='Day 28'>Day 28</option>
						<option value='Day 29'>Day 29</option>
						<option value='Day 30'>Day 30</option>
						<option value='Day 31'>Day 31</option>
					  </select>
					</div>
					<div class="form-group col-md-3">
					  <label>Month Name:</label>
					  <select id="u_month" name='u_month' class="form-control">
						<option value=''>Choose...</option>
						<option value='January'>January</option>
						<option value='February'>February</option>
						<option value='March'>March</option>
						<option value='April'>April</option>
						<option value='May'>May</option>
						<option value='June'>June</option>
						<option value='July'>July</option>
						<option value='August'>August</option>
						<option value='September'>September</option>
						<option value='October'>October</option>
						<option value='November'>November</option>
						<option value='December'>December</option>
					  </select>
					</div>
					<div class="form-group col-md-2">
					  <label>Year:</label>
					 <select id="u_year" name='u_year' class="form-control">
						<option value=''>Choose...</option>
						<option value='2018'>2018</option>
						<option value='2019'>2019</option>
						<option value='2020'>2020</option>
						<option value='2021'>2021</option>
						<option value='2022'>2022</option>
						<option value='2023'>2023</option>
						<option value='2024'>2024</option>
					  </select>
					</div>
					<div class="form-group col-md-2">
					  <label>Department:</label>
					  <input type="text" class="form-control" id="u_dept_name" name="u_dept_name">
					</div>
				  </div>
				  <!--<div class="form-group">
					<label for="inputAddress">Address</label>
					<input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
				  </div>
				  <div class="form-group">
					<label for="inputAddress2">Address 2</label>
					<input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
				  </div>-->
				  <div class="form-row">
					<div class="form-group col-md-3">
					  <label>Update Meal charge:</label>
					  <input type="text" class="form-control" id="u_m_charge" name="u_m_charge">
					</div>
					<div class="form-group col-md-3">
					  <label>Update Extra charge:</label>
					  <input type="text" class="form-control" id="u_e_charge" name="u_e_charge">
					</div>
					<div class="form-group col-md-3">
					  <label>Update Manager name:</label>
					  <input type="text" class="form-control" id="u_m_name" name="u_m_name">
					</div>
				  </div>
				  <button type="submit" class="btn btn-primary">Update</button>
				</form>
			</div>
		</div>
		<?php include "footer.php";?>
	</body>
</html>