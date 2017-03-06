<?php
error_reporting(E_ALL ^ E_DEPRECATED);
?>
<?php   
$db_host = "localhost"; 
$db_username = "minto5z";   
$db_pass = "";  
$db_name = "mystore"; 
 
mysql_connect($db_host,$db_username,$db_pass) or die ("could not connect to mysql");
mysql_select_db($db_name) or die ("no database");    


// $link = mysqli_connect($db_host, $db_username, $db_pass, $db_name);

// if (!$link) {
//     echo "Error: Unable to connect to MySQL." . PHP_EOL;
//     echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
//     echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
//     exit;
// }

// echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
// echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL;

// mysqli_close($link);

?>