<!DOCTYPE html>
<html>
<head>
<title>Home</title>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
  
<form name="register" method="POST" action="index.php">
  <?php 
   if(isset($formdata)){
    echo "<input type='hidden' name='id' value='".$formdata['id']."'>";
   }
  ?>

<br><br><br><br>
<div class="container" style="background: skyblue">
	<h1 align="center" style="color: white;">Registration Form</h1>
<!-- Content here -->

<div class="row">
  <div class="col-sm-8"> <br><br><br>
      Photo:<br>
      <input type="file" name="userPhoto" value="<?php echo (isset($formdata['userphoto']) ? $formdata['photo'] : "") ?>" ><br>
  </div>

  <div class="col-sm-4">
  	<!-- <form> -->
  <div class="form-group" >
 	<br><br>
    <label for="exampleInputDate">Date</label><br>
    <input type="Date" name="regDate" value="<?php echo (isset($formdata['regDate']) ? $formdata['regDate'] : "") ?>"class="form-control" id="exampleInputDate" aria-describedby="dateHelp" placeholder="Enter Date"><br>
  
  </div>
  <div class="form-group">
    <label for="exampleInputAddress">Registration Number</label><br>
    <input type="text" class="form-control" name="regNumber" value="<?php echo (isset($formdata['regNumber']) ? $formdata['regNumber'] : "") ?>" id="exampleInputRegNo" placeholder="Registration Number"><br>
  </div>
  
</form>
</div>
</div>


<div class="row">
<div class="col-sm">
<!-- <form> -->
  <div class="form-group">
    <label for="exampleInputName">Name</label>
    <input type="text" name="uname" value="<?php echo (isset($formdata['name']) ? $formdata['name'] : "") ?>" class="form-control" id="exampleInputName" aria-describedby="nameHelp" placeholder="Enter Name">

</div>


  <div class="form-group">
    <label for="exampleInputAddress">Address</label>
    <input type="text" name="address" value="<?php echo (isset($formdata['address']) ? $formdata['address'] : "") ?>" class="form-control" id="exampleInputAddress" placeholder="Address">
  </div>
  <div class="form-group">
    <label for="exampleInputDob">Date Of Birth </label>
    <input type="date" name="dob" value="<?php echo (isset($formdata['dob']) ? $formdata['dob'] : "") ?>" class="form-control" id="exampleInputDob" placeholder="Date Of Birth">
  </div>
  
<!-- </form> -->
  	</div>

  <div class="col-sm">
  	<!-- <form> -->
  <div class="form-group">
    <label for="exampleInputEmail">Email address</label>
    <input type="text" name="email" value="<?php echo (isset($formdata['email']) ? $formdata['email'] : "") ?>" class="form-control" id="exampleInputEmail" aria-describedby="nameHelp" placeholder="Enter Email">
    
  </div>
  <div class="form-group">
    <label for="exampleInputPhoneNo">Phone Number</label>
    <input type="text" name="phoneNumber" value="<?php echo (isset($formdata['phoneNumber']) ? $formdata['phoneNumber'] : "") ?>" class="form-control" id="exampleInputAddress" placeholder="Enter Phone Number">
  </div>
  
  <br><br><br>
  


<ul style="float: center">
<button type="submit" name="register_btn" value="register" class="btn btn-secondary"> 
  <?php echo (isset($formdata) ? 'Update' : 'Save') ?></button>
 

<a type="submit" class="btn btn-success" href="/testproject/databasedata.php">Cancel</a>
</ul>



<!-- </form> -->
</div>
</div>
</div>

<!-- </form> -->

</form>
	

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>