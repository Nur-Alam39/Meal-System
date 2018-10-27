<!DOCTYPE html>
<html>
	<title>Members | Meal System</title>
	<link rel="icon" href="meal_icon.png" />
	<head>
		<?php include "linker.php";?>
	</head>
	
	<body>
	<!--Delete member-->
	<div class="modal fade" id="ModalforDeleteMember" >
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" style='color:#000'>Delete Member</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body text-center" id="delete_member">
					<form id='delete_member_form' method='post'>
						<div class="form-inline" style='font-weight:bold;'>
						  <div class='col-lg-4'>
								Name: &ensp;<select  style="margin-top:px;color:#333333;"  class='form-control' id="name" name="name">
									<option value="NULL">NULL</option>
									<?php
										$sql = "SELECT * FROM daily_meal";
										$records=mysqli_query($connect,$sql);
										while($data=mysqli_fetch_array($records))
										{
											echo "<option value='".$data['Name']."'>".$data['Name']."</option>";		
										}
										?>
									<option value="all">All</option>
								</select>
							</div>
						  <input type='hidden' name='action' id='action' value="delete"/>
							<input type='hidden' name='member_id' id='member_id'/>
							<input type='submit' name='delete' style='margin-left:4%' id='delete' value='Delete' class='btn btn-danger' align='center'/>
						</div>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
	<!--Add member-->
	<div class="modal fade" id="ModalforAddMember" >
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" style='color:#000'>New Member</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body" id="new_member">
					<form id='add_member_form' method='post'>
						<div class="form-inline" style='font-weight:bold;'>
						  <label for="author" class="mr-sm-2">Name : </label>
						  <input type="text" class="form-control" id="name" name='name'>
						   <label for="id" class="mr-sm-2" style='margin-left:5%;'>ID : </label>
						  <input type="text" class="form-control" id="id" name='id'>
						  <input type='hidden' name='action' id='action' value="insert"/>
							<input type='hidden' name='member_id' id='member_id'/>
							<input type='submit' name='insert' style='margin-left:4%' id='insert' value='Insert' class='btn btn-primary' align='center'/>
						</div>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
		<div class='container-fluid text-center' style='margin:0;margin-top:8%;margin-bottom:2%'>
			<?php echo"<h6 style='color:black'>Month: ".$month.", ".$year."</h6>"; ?>
			<h4 style='color:black'>Members' Information</h4>
			<a class="btn btn-primary btn-sm" style='color:white' data-toggle='modal' id='add_mem' name='add_mem' data-target='#ModalforAddMember'>Add Member</a>
			<a class="btn btn-dark btn-sm" style='color:white' data-toggle='modal' id='delete_mem' name='delete_mem' data-target='#ModalforDeleteMember'>Delete Member</a>
		</div>
		<div class='container-fluid text-center' id='all_members' style='margin:0;margin-top:3%;margin-bottom:2%'>	
		
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
				url:"action.php",
				method:"POST",
				data:{action:action},
				success:function(data)
				{
					$('#all_members').html(data);
				}
			})
		}
		$('#add').click(function(){
			$('#ModalforAddMember').modal('show');
			$('#add_member_form')[0].reset();
			$('.modal-title').text("Add Member"); 
			$('#member_id').val('');
			$('#action').val('insert');
			$('#insert').val('Insert');
		});
		$('#add_member_form').submit(function(event){
			event.preventDefault();
			var name=$('#name').val();
			var id=$('#id').val();
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
			else
			{
				$.ajax({
					 url:"action.php",
					 method:"POST",
					 data:new FormData(this),
					 contentType:false,
					 processData:false,
					 success:function(data)
					 {
					  fetch_data();
					  $('#ModalforAddMember').modal('hide');
					  $('#add_member_form')[0].reset();
					 }
					});
			}
		});
		$('#delete_member_form').submit(function(event){
			event.preventDefault();
			var name=$('#name').val();
			if(name=='')
			{
				alert("Please enter name.");
				return false;
			}
			else
			{
				alert("Are you sure, delete " +name);
				$.ajax({
					 url:"action.php",
					 method:"POST",
					 data:new FormData(this),
					 contentType:false,
					 processData:false,
					 success:function(data)
					 {
					  fetch_data();
					  $('#ModalforDeleteMember').modal('hide');
					  $('#delete_member_form')[0].reset();
					 }
					});
			}
		});
	});
	</script>
	<script>
	//for members info
			$(document).ready(function(){
			 $('.member_details_info').click(function(){
			   var id = this.id;
			   var splitid = id.split('_');
			   var member_id = splitid[1];
			   alert("hello");
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
</html>