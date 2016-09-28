<?php
session_start();
require_once('config.php');
require_once('country.php');
$country=$_POST['country'];
$nameoremail=$_POST['nameoremail'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>List User</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container" >
  <h2 style="color:white;" class="header">User List</h2>
  <hr>
  
  <form action="user_list.php" class="form-inline pull-left" role="form"  method="post">
  <div class="col-sm-8">
        <div class="form-group">
      <label class="control-label col-sm-2" for="email"><strong>Filter</strong></label>
      <div class="col-sm-10">
        <select name="country" id="country" class="form-control">
			<option value="">Select Country</option>
			<?php
			foreach($countries as $key => $value) {
			?>
			<option value="<?= $value ?>" title="<?= htmlspecialchars($value) ?>"><?= htmlspecialchars($value) ?></option>
			<?php
			}
			?>
		</select>
    </div>
    </div>
    </div>
	<div class="col-sm-4">
	<button type="submit" class="btn btn-info">Search</button>
	</div>
  </form>
  
  <form action="user_list.php" class="form-inline pull-right" role="form"  method="post" >
  <div class="col-sm-8">
        <div class="form-group">
      <label class="control-label col-sm-6" for="email"><strong>Name OR Email</strong></label>
      <div class="col-sm-6">
        <input type="text" class="form-control" placeholder="By Name OR Email" name="nameoremail" id="name" >
      </div>
    </div>
    </div>
	<div class="col-sm-4">
	<button type="submit" class="btn btn-info">Search</button>
	</div>
  </form>
  
  <?php
	if($country ==''AND $nameoremail=='')
	{
	?>

  <table class="table table-bordered table-margin" >
  
    <thead>
      <tr>
		<th>No.</th>
        <th>Name</th>
        <th>Country</th>
        <th>Email</th>
		<th>Mobile Number</th>
		<th>About You</th>
		<th>Birthday</th>
      </tr>
    </thead>
    <tbody>
	<?php
		$result = mysql_query("SELECT * FROM user_table");
		$i=1;
		while($row = mysql_fetch_array($result))
		{ 
	?>
	<tr>
        <td><?php echo $i++;?></td>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['country']; ?></td>
		<td><?php echo $row['email']; ?></td>
		<td><?php echo $row['mobile']; ?></td>
		<td><?php echo $row['about']; ?></td>
		<td><?php echo $row['dob']; ?></td>
    </tr>
	<?php
	
	}
		
	?>
      
    </tbody>
  </table>
  <?php
	}  
  ?>
 
  <?php
	if($country !='')
	{
	?>
  <table class="table table-bordered table-margin">
    <thead>
      <tr>
		<th>No.</th>
        <th>Name</th>
        <th>Country</th>
        <th>Email</th>
		<th>Mobile Number</th>
		<th>About You</th>
		<th>Birthday</th>
      </tr>
    </thead>
    <tbody>
	<?php
		$result = mysql_query("SELECT * FROM user_table where country='$country'");
		$i=1;
		
		if(mysql_num_rows($result) > 0)
		{
		while($row = mysql_fetch_array($result))
		{ 
	?>
	<tr>
        <td><?php echo $i++;?></td>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['country']; ?></td>
		<td><?php echo $row['email']; ?></td>
		<td><?php echo $row['mobile']; ?></td>
		<td><?php echo $row['about']; ?></td>
		<td><?php echo $row['dob']; ?></td>
    </tr>
	<?php
	
	}
	}
	else
	{?>
	<tr><td colspan="7">
	<div class="alert alert-warning">
    <strong>Data Not Found !</strong> 
    </div>
	</td></tr>
	<?php
	}
	
		
	?>
      
    </tbody>
  </table>
  <?php
	}  
  ?>
  
  <?php
	if($nameoremail !='')
	{
	?>
  <table class="table table-bordered table-margin" >
    <thead>
      <tr>
		<th>No.</th>
        <th>Name</th>
        <th>Country</th>
        <th>Email</th>
		<th>Mobile Number</th>
		<th>About You</th>
		<th>Birthday</th>
      </tr>
    </thead>
    <tbody>
	<?php
		$result = mysql_query("SELECT * FROM user_table where name='$nameoremail' OR email='$nameoremail'");
		$i=1;
		if(mysql_num_rows($result) > 0)
		{
		while($row = mysql_fetch_array($result))
		{ 
	?>
	<tr>
        <td><?php echo $i++;?></td>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['country']; ?></td>
		<td><?php echo $row['email']; ?></td>
		<td><?php echo $row['mobile']; ?></td>
		<td><?php echo $row['about']; ?></td>
		<td><?php echo $row['dob']; ?></td>
    </tr>
	<?php
	
	}
	}
	
	else
	{?>
	<tr><td colspan="7">
	<div class="alert alert-warning">
    <strong>Data Not Found !</strong> 
    </div>
	</td></tr>
	<?php
	}
	
		
	?>
		
	
      
    </tbody>
  </table>
  <?php
	}  
  ?>
  
 
  
 </div>
  

  

</body>
</html>









			      			        


			      			  	