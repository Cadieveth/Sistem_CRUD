<html>
<head>
<meta charset="UTF-8">
<title>Edit | Actor Data</title>
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
	
<h2>Edit Data</h2>
</div>
<?php
	require_once('config.php');
	$id = $_GET['idcontent'];
	$sql = "SELECT * FROM 19n30012actor WHERE actor_id='$id'";
	$result = $conn->query($sql);
	
	if($result->num_rows > 0)	{
		while($row = $result->fetch_assoc())	{
			$actor_id = $row['actor_id'];
			$first_name = $row['first_name'];
			$last_name = $row['last_name'];
			$last_update = $_row['last_update'];
		}
	}
?>
	
<form method="post" action="update_actor.php">
<table cellpadding="8">
	
	<div class="form-group <?php echo (!empty($actor_id_err)) ? 'has-error' : ''; ?>">
		<label>ID</label>
		<input type="text" name="actor_id" class="form-control" value="<?php echo $actor_id; ?>">
		<span class="help-block"><?php echo $actor_id_err;?></span>
	</div>
	
	<div class="form-group <?php echo (!empty($first_name_err)) ? 'has-error' : ''; ?>">
		<label>First Name</label>
		<input type="text" name="first_name" class="form-control" value="<?php echo $first_name; ?>">
		<span class="help-block"><?php echo $first_name_err;?></span>
	</div>

	<div class="form-group <?php echo (!empty($last_name_err)) ? 'has-error' : ''; ?>">
		<label>Last Name</label>
		<input type="text" name="last_name" class="form-control" value="<?php echo $last_name; ?>">
		<span class="help-block"><?php echo $last_name_err;?></span>
	</div>

	<div class="form-group <?php echo (!empty($last_update_err)) ? 'has-error' : ''; ?>">
		<label>LAst Update</label>
		<input type="date" name="last_update" class="form-control" value="<?php echo $last_update; ?>">
		<span class="help-block"><?php echo $last_update_err;?></span>
	</div>
	
<td width="40%"><input class="btn btn-info" type="submit" name="Submit" value="Simpan" /></td>
<td width="20%"></td>
<td width="40%"><input class="btn btn-info" name="batal" type="reset" id="batal" value="Reset" /></td>
</label>
</form>
</div>
</div>
</div>
</div>
</body>
</html>