<?php
$page_title = 'Name Change';
include_once("initialize.php");

check_db_connection($connect);

$userQuery = name_change_query();

$result = mysqli_query($connect, $userQuery);

print("	<h1>UPDATE</h1>");
print ("<p>The employee update has been completed.</p>");

mysqli_close($connect);
include_once("includes/footer.php");
 
?>

