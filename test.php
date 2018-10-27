<html>
	<title>Create New</title>
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
			label{font-weight:bold;}
		</style>
	</head>
	<body>
		<div class='container-fluid ' style='margin:0;margin-top:5%;margin-bottom:4%'>
			<h4 class='text-center'>Code Test Page</h4>
			<div class='' style='margin:0;margin-left:20%;margin-right:20%;margin-top:2%;padding:2%;border-radius:10px;box-shadow:0 0 10px #b3b3b3'>
				<form>
				  <div class="form-row">
					<div class="form-group col-md-6">
					  <label>Manager Name:</label>
					  <input type="text" class="form-control" id="name" name='name' placeholder="Enter name">
					</div>
					<div class="form-group col-md-6">
					  <label for="inputPassword4">Password:</label>
					  <input type="password" class="form-control" id="password" name='password' placeholder="Enter password">
					</div>
				  </div>
				   <div class="form-row">
					<div class="form-group col-md-5">
					  <label>Month Name:</label>
					  <select id="month" name='month' class="form-control">
						<option>Choose...</option>
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
					<div class="form-group col-md-4">
					  <label for="inputPassword4">Year:</label>
					 <select id="extra_charge" name='extra_charge' class="form-control">
						<option selected>Choose...</option>
						<option value='2018'>2018</option>
						<option value='2019'>2019</option>
						<option value='2020'>2020</option>
						<option value='2021'>2021</option>
						<option value='2022'>2022</option>
						<option value='2023'>2023</option>
						<option value='2024'>2024</option>
					  </select>
					</div>
					<div class="form-group col-md-3">
					  <label>Current day:</label>
					  <select id="extra_charge" name='extra_charge' class="form-control">
						<option selected>Choose...</option>
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
					  <label>Initial Meal charge:</label>
					  <input type="text" class="form-control" id="meal_charge" name="meal_charge">
					</div>
					<div class="form-group col-md-3">
					  <label>Initial Extra charge:</label>
					  <input type="text" class="form-control" id="extra_charge" name="extra_charge">
					</div>
				  </div>
				  <button type="submit" class="btn btn-primary">Create</button>
				</form>
			</div>
		</div>
	</body>
</html>	