<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Deleted | Actor</title>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
    <style type="text/css">
        .wrapper{
            width: 1000px;
            margin: 0 auto;
        }
        .page-header h2{
            margin-top: 0;
        }
        table tr td:last-child a{
            margin-right: 15px;
        }
    </style>
    <script type="text/javascript">
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header clearfix">
                        <h2 class="pull-left">Deleted Data</h2>
                           </div>

<?php
include "config.php";
$sql = "SELECT * FROM 19n30012actor WHERE status_delete='1'";
$result = $conn->query($sql);
if($result->num_rows>0)	{
			$i=0;
		echo "<table class='table table-hover'>";
		echo "<thead>";
		echo "<tr>";
		echo "<th>No</th>";
		echo "<th>ID</th>";
		echo "<th>First Name</th>";
		echo "<th>Last Name</th>";
		echo "<th>Last Update</th>";
		echo "<th>Option</th>";
		echo "<th>Edit</th>";
		echo "</tr>\r";
		echo "</thead>";
	while($row=$result->fetch_assoc()){
		echo "<tr>\r";
		$i++;
		echo "<td>".$i."</td>\r";
		echo "<td>".$row['actor_id']."</td>\r";
		echo "<td>".$row['first_name']."</td>\r";
		echo "<td>".$row['last_name']."</td>\r";
		echo "<td>".$row['last_update']."</td>\r";
		echo "</td>\r";
	}
		echo "</table></td></tr></table>\r";
	} else {
		echo "0 Result";
}
$conn->close();
?>
				</div>
				<table>
					<tr>
					<td><a class='btn btn-info' href="tampilan_notabeli.php"> Back </a></td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</body>
</html>	