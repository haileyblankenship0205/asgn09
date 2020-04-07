<?php
$page_title = 'Wage Report'; 
include_once("initialize.php");

check_db_connection($connect);

$userQuery = hourly_wage_less_than_ten_dollars_query();

$result = mysqli_query($connect, $userQuery);

check_that_query_runs($result);

$hourlyWage = $_POST['hourlyWage'];
$jobTitle = $_POST['jobTitle'];

if (mysqli_num_rows($result) == 0) 
{
	print("No records found with query $userQuery");
}
else 
{ 
	print("<h1>RESULTS</h1>");
	print("<p>The following employees have the $jobTitle job title, and an hourly wage of $".
			number_format($hourlyWage, 2)." or higher:</p>");
			
	print("<table border = \"1\">");
	print("<tr><th>EMP ID</th></tr>");

    while ($row = mysqli_fetch_assoc($result)) {
      print("<tr><td>".$row['empID']."</td></tr>");
    }

	print ("</table>");
}

mysqli_close($connect);
include_once("includes/footer.php");
?>
