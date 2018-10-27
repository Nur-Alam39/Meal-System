<html>
	<title>Meal System</title>
	<link rel="icon" href="meal_icon.png" />
	<head>
		<script src="jquery.js" type="text/javascript"></script>
		<link rel="stylesheet" href="bootstrap4/css/bootstrap.css"/>
		<script src="bootstrap4/js/bootstrap.js" type="text/javascript"></script>
	</head>
	<body>
		<div class='container-fluid text-center' style='padding:0;margin:0'>
			<h2>BSMRSTUBSMRSTUBSMRSTUBSMRSTUBSMRSTU</h2>
		</div>
		
		<div class='row text-center' style='padding:0;margin:0'>
			<div class='col-lg-4' style='background-color:#666;padding:5%;margin:2%;margin-left:3%'>1
			</div>
			<div class='col-lg-2' style='background-color:#f2f2f2;padding:5%;margin:2%'>2
			</div>
			<div class='col-lg-4' style='background-color:#999;padding:5%;margin:2%'>3
			</div>
		</div>
		
		<div class='row text-center' style='padding:0;margin:0'>
			<div class='col-lg-5' style='background-color:#666;padding:5%;margin:2%;margin-left:3%'>1
			</div>
			<div class='col-lg-5' style='background-color:#999;padding:5%;margin:2%'>3
			</div>
		</div>
		
		<div class="container">
		  <h2>Stacked form</h2>
		  <form action="/action_page.php">
			<div class="form-group">
			  <label for="email">Name:</label>
			  <input type="text" class="form-control" id="Name" placeholder="Enter name" name="Name">
			</div>
			<div class="form-group">
			  <label for="sel1">Department:</label>
			  <select class="form-control" id="sel1">
				<option>CSE</option>
				<option>EEE</option>
				<option>ETE</option>
				<option>ACCE</option>
				<option>MAT</option>
				<option>STA</option>
			  </select>
			</div>
			<div class="form-group">
			  <label for="email">Email:</label>
			  <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
			</div>
			<div class="form-group">
			  <label for="pwd">Password:</label>
			  <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
			</div>
			<input type="file" class="form-control-file border">
			<div class="form-group form-check">
			  <label class="form-check-label">
				<input class="form-check-input" type="checkbox" name="remember"> Remember me
			  </label>
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
		  </form>
		</div>
	</body>
<html>