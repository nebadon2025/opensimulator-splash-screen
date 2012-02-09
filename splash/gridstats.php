<?php

//database connection string
$con = mysql_connect('localhost', 'user_name', 'user_password');
//database name
$database = "db_name";

mysql_select_db($database, $con);
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

// Query the database and get the count

$result1 = mysql_query("SELECT COUNT(*) FROM Presence");
list($totalUsers) = mysql_fetch_row($result1);

$result2 = mysql_query("SELECT COUNT(*) FROM regions");
list($totalRegions) = mysql_fetch_row($result2);

$result3 = mysql_query("SELECT COUNT(*) FROM UserAccounts");
list($totalAccounts) = mysql_fetch_row($result3);

$result4 = mysql_query("SELECT COUNT(*) FROM GridUser WHERE Login > (UNIX_TIMESTAMP() - (30*86400))");
list($activeUsers) = mysql_fetch_row($result4);

// Display the results

echo "<div id='stats2'><b><font color=#00FF00>Users in world</font><font color=#FFFFFF> : ". $totalUsers ."<font color=#FFFFFF><br>";
echo "<font color=#00FF00>Total Regions</font> : ". $totalRegions ."<font #FFFFFF><br>";
echo "<font color=#00FF00>Active users (last 30 days)</font> : ". $activeUsers ."<font color=#FFFFFF><br>";
echo "<font color=#00FF00>Total Users</font> : ". $totalAccounts ."<font color=#FFFFFF><br>";
echo "<font color=#00AA00>Grid is ONLINE</font></b><br></div>";
/* echo "<font color=#AA0000>Grid is OFFLINE</font></b>";<br></div> */
?>