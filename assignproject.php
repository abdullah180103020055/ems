<?php

require_once ('process/dbh.php');
$sql = "SELECT * from `project` order by subdate desc";

//echo "$sql";
$result = mysqli_query($conn, $sql);

?>



<html>
<head>
	<title>Employee Management System.</title>
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/styleview.css">
</head>
<body>
	<header>
		<nav id="container">
			<div class="logo">
				<a href="">EMS</a>
			</div>
			<uL>
            <li><a   href="aloginwel.php">Home</a></li>
				<li><a   href="addemp.php">Add.Employee</a></li>
				<li><a   href="viewemp.php">V.Employee</a></li>
				<li><a   href="assign.php">Ass.Project</a></li>
				<li><a   href="assignproject.php">P.Status</a></li>
				<li><a   href="salaryemp.php">S.Table</a></li>
				<li><a   href="empleave.php">E.Leave</a></li>
				<li><a   href="alogin.html">Log Out</a></li>
			</ul>
		</nav>
	</header>

		<table>
			<tr>

				<th align = "center">Project ID</th>
				<th align = "center">Emp. ID</th>
				<th align = "center">Project Name</th>
				<th align = "center">Due Date</th>
				<th align = "center">Submission Date</th>
				<th align = "center">Mark</th>
				<th align = "center">Status</th>
				<th align = "center">Option</th>
				
			</tr>

			<?php
				while ($employee = mysqli_fetch_assoc($result)) {
					echo "<tr>";
					echo "<td>".$employee['pid']."</td>";
					echo "<td>".$employee['eid']."</td>";
					echo "<td>".$employee['pname']."</td>";
					echo "<td>".$employee['duedate']."</td>";
					echo "<td>".$employee['subdate']."</td>";
					echo "<td>".$employee['mark']."</td>";
					echo "<td>".$employee['status']."</td>";
					echo "<td><a href=\"mark.php?id=$employee[eid]&pid=$employee[pid]\">Mark</a>"; 

				}


			?>

		</table>
		
	
</body>
</html>