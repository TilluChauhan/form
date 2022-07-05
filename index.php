<!DOCTYPE html>
<html lang="en">
<head>
  <?php include 'include/head.php'?>
</head>
<body>
	<section>
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12">
					<div class="a1">
						<h1>Enquiry Form</h1>
					</div>
				</div>
				
				
				
			</div>
			<div class="row">
				
					<div class="col-lg-12 col-md-12">
						<div class="q1">
							<h2>Customer</h2>
							<div action="">
								<div class="">
								<p class="wq" >Gender:
									<select name="Ticket" id="gender" >
									<option id="val" value="">Select Gender</option>
									<option id="va2" value="Mr.">Mr.</option>
									<option  id="va3" value="Mrs.">Mrs.</option>
									
								  </select></p>
								</div>
								<div class="form-group">
									
								  <label for="name" class="wq">Name:</label>
								  <input type="text" class="form-control" id="name" placeholder="Enter name" name="">
								</div>
								<div class="form-group">
								  <label for="age" class="wq">Age:</label>
								  <input type="number" class="form-control" id="age" placeholder="Enter name" name="">
								</div>
								<div class="form-group">
								  <label for="email" class="wq">Email:</label>
								  <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
								</div>
								<div class="form-group" >
								  <label for="mobile" class="wq">Mobile:</label>
								  <input type="number" class="form-control" id="number" placeholder="Enter number" name="no">
								</div>
								
								
								
								  <div class="w1">
									<div class="w2">
									<p class="wq"  >Country
										<select name="Ticket" id="country" >
										<option id="val" value="">Select Country</option>
										<option id="va2" value="India">India</option>
										<option  id="va3" value="Australia">Australia</option>
										<option id="va4" value="New Zealand">New Zealand</option>
									  </select></p>
									</div>
									<div class="w2">
									<p class="wq">City
										<select name="Ticket" id="city" >
									<option id="val" value="">Select city</option>
									<option id="va2" value="Uttar Pradesh">Uttar Pradesh</option>
									<option  id="va3" value="Punjab">Punjab</option>
									<option id="va4" value="Mumbai">Mumbai</option>
								  </select></p>
									</div>
								 </div>
								<div class="form-group form-check">
								  <label class="form-check-label">
									<input class="form-check-input" type="checkbox" name="remember"> Remember me
								  </label>
								</div>
								<button id="submit" class="btn btn-primary">Submit</button>
							  </div>
						</div>
					</div>
				
				</div>
		</div>
	</section>
	



 <?php include 'include/script.php'?>
 <script>
	$(document).ready(function(){
		 $('#gender').change(function(){
			 var gendervariable=$(this).val();
			 console.log(gendervariable);
		 });
		
			$('#submit').click(function(){
				var category=$('#gender').val();
				var name=$('#name').val();
				var age=$('#age').val();
				var email=$('#email').val();
				var mobile=$('#number').val();
				var country=$('#country').val();
				var city=$('#city').val();
				
				console.log(category);
				console.log(country);
				console.log(city);
				
				console.log(name);
				console.log(age);
				console.log(email);
				console.log(mobile);
				var data={"T_cat":category,"T_name":name,"T_age":age,"T_email":email,"T_mobile":mobile,"T_country":country,"T_city":city};
				 console.log(data);
				 
				 
				  $.ajax({
				 type:'POST',
				 url:'ajax/insert.php',
				 data:data,
				 success:function(res){
					 console.log(res);
				 }
				
			 });
			});
			 
			 
			
			
			
	});
	$(function(){
	
	});
	
	 
	</script>
</body>
</html>
