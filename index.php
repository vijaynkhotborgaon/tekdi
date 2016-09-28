<?php
session_start();
require_once('config.php');
require_once('country.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Add User</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body style="color:#F2FAFA;background:#F7819F;">

<div class="container">
	
  <h2 style="color:#F2FAFA;" class="header" style="float:left;">Add User</h2>
  <a href="user_list.php" class="btn btn-info btn-lg user_link"  role="button" >View User List</a>
  
  <hr>
  
  
  
  <?php
		if(isset($_SESSION['USER_ADDED']) && $_SESSION['USER_ADDED']==1 ) {
	?>
		<div class="alert alert-success">
				<strong>User Added Successfully.</strong> 
		</div>
		<?php
			unset($_SESSION['USER_ADDED']);

	}
	?>

  <form class="form-horizontal" action="create_user_process.php" method="post" enctype="multipart/form-data" role="form">
	<div class="form-group">
      <label class="control-label col-sm-2" for="email"><strong>Name</strong></label>
      <div class="col-sm-10">
        <input type="text" class="form-control" placeholder="Name" name="name" id="name" required>
      </div>
    </div>
	
	<div class="form-group">
      <label class="control-label col-sm-2" for="email"><strong>Country</strong></label>
      <div class="col-sm-10">
        <select name="country" id="country" class="form-control" required>
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
	
	<div class="form-group">
      <label class="control-label col-sm-2" for="email"><strong>Email</strong></label>
      <div class="col-sm-10">
        
		 <input type="text" class="form-control" placeholder="Email" name="email" id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="pattern should be : ABC@example.com" required>
      </div>
    </div>
	
	<div class="form-group">
      <label class="control-label col-sm-2" for="email"><strong>Mobile</strong></label>
      <div class="col-sm-10">
        <input type="text" class="form-control" placeholder="Mobile" name="mobile" id="mobile" maxlength="10"  pattern="[0-9]{10}"  title="Mobile number should be 10 digits" required>
      </div>
    </div>
	
	<div class="form-group">
      <label class="control-label col-sm-2" for="email"><strong>About You</strong></label>
      <div class="col-sm-10">
        
		<textarea class="form-control" rows="5" id="address" name="about" placeholder="About You" required></textarea>
      </div>
    </div>
	
	
	
	<div class="form-group">
      <label class="control-label col-sm-2" for="email" ><strong>Birth Day </strong></label>
      <div class="col-sm-10">
        <input type="date" class="form-control" placeholder="Date of Birth" required name="DOB" id="DOB"/>
		
      </div>
    </div>

    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
			<input type="submit" class="btn btn-info" value="Submit">
      </div>
    </div>
  </form>
</div>

</body>
</html>









			      			        


			      			  	