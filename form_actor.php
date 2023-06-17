<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Form Actor</title>
<link rel="stylesheet" href="css/bootstrap.css">
<style type="text/css">
.wrapper{
width: 500px;
margin: 0 auto;
}
</style>
</head>
<body>
<div class="wrapper">
<div class="container-fluid">
<div class="row">
<div class="col-md-12">
<div class="page-header">
	
<h2>Input Data</h2>
</div>
	
<div class="p-3 mb-2 bg-secondary text-white">
<form action="berhasil_actor.php" method="post">
<table cellpadding="8">

		<div class="form-group <?php echo (!empty($actor_id_err)) ? 'has-error' : ''; ?>">
		<label>ID</label>
		<input type="text" name="actor_id" class="form-control" value="<?php echo $actor_id; ?>" placeholder="20012">
		<span class="help-block"><?php echo $actor_id_err;?></span>
		</div>
	
		<div class="form-group <?php echo (!empty($first_name_err)) ? 'has-error' : ''; ?>">
		<label>First Name</label>
		<input type="text" name="first_name" class="form-control" value="<?php echo $first_name; ?>" placeholder="Example: Scoot">
		<span class="help-block"><?php echo $first_name_err;?></span>
		</div>
	
		<div class="form-group <?php echo (!empty($last_name_err)) ? 'has-error' : ''; ?>">
		<label>Last Name</label>
		<input type="text" name="last_name" class="form-control" value="<?php echo $last_name; ?>" placeholder="Example: Anthony">
		<span class="help-block"><?php echo $last_name_err;?></span>
		</div>
	
		<div class="form-group <?php echo (!empty($last_update_err)) ? 'has-error' : ''; ?>">
		<label>Last Update</label>
		<input type="date" name="last_update" class="form-control" value="<?php echo $last_update; ?>">
		<span class="help-block"><?php echo $last_update_err;?></span>
		</div>
	
	<tr>
		<td width="70%"></td>
		<td width="20%"><input class="btn btn-info" type="submit" value="Login"></td>
		<td width="10%"></td>
	</tr>
</table>
</form>
</div>
</body>
</html>