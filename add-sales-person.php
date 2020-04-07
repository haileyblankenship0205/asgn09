<?php
$page_title = 'Add sales Person'; 
include_once("initialize.php");

check_db_connection($connect);

$userQuery = hourly_wage_less_than_ten_dollars_query();

$result = mysqli_query($connect, $userQuery);

check_that_query_runs($result);

$empID = $_POST['empID'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];

print("	<h1>ADD A NEW PERSONNEL RECORD</h1>");
print ("<p>The following record was added to the personnel table:</p>");
print("<table border='0'>
		<tr><td>EMPLOYEE ID</td><td>$empID</td></tr>
		<tr><td>FIRST NAME</td><td>$firstName</td></tr>
		<tr><td>LAST NAME</td><td>$lastName</td></tr>		
		<tr><td>JOB TITLE</td><td>sales</td></tr>
		<tr><td>HOURLY WAGE</td><td>8.25</td></tr>
		</table>");


mysqli_close($connect);
include_once("includes/footer.php"); 
?>
