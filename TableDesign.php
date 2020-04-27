
<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<title>Database Data</title>
	<style type="text/css">
	table
	{
		border-collapse: collapse;
		width: 100%;
		color: #5888c7e;
		font-family: monospace;
		font-size: 30px;
		text-align: left;
	}
	th{
		background-color: skyblue;
		color: white;
	}
	tr:nth-child(even)
	{

	background-color: #588c7e;
	color: white;
	}
		
	</style>
	
</head>
<body>
     <form method="post" action="">
		<div class="container-fluid">



 <div class="container">
  <div class="row">
    <div class="col"></div>
    <div class="col">
    	
    </div>
    <div class="w-100">
    	
    </div>
    
    <div class="col"><br>
  <table>
		<tr>
			<th>RegNumber</th>
			<th>Name</th>
			<th>Phone Number</th>
			<th>Address</th>
			<th>Edit</th>
			<th>Delete</th>
		</tr>
	
	<?php
	
    if($result->num_rows >0)
		    {
			while($row=$result->fetch_assoc())
			{
				echo "<tr><td>".$row["regNumber"]."</td><td>".$row["name"]."</td><td>".$row["phoneNumber"]."</td><td>".$row["address"]."</td><td><a href='index.php/?id=".$row["id"]."&eddit=1"."'>Edit</a></td><td><a href='index.php/?id=".$row["id"]."&delete=1"."'>Delete</a></td></tr>";

			}
			echo "</table>";
		    }
		    else
		    { 
		    echo "0 results";
		    }
	?>


	</table></div>
  </div>
</div>



</div>
	



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

	</form>

	
</body>
</html>
