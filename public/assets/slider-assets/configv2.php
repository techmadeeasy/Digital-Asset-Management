<?php
// Variables: 

// Database
$db_host = 'localhost'; // Hostname of database
$db_username = 'devzooco_down11'; // Username
$db_password = 'MI6xwMSP';  // Password
$db_name = 'devzooco_down11'; // Database name

// Set the maximum number of downloads (actually, the number of page loads)
$maxdownloads = "2";

// Set the keys' viable duration in seconds (86400 seconds = 24 hours)
$lifetime = "86400";

// Set the real names of actual download files on the server as a comma-separated list (this is optional; you can use a single filename or just leave it as empty double-quotes: "")
$realfilenames = "http://www.syndication-bazaar.com/wp-content/uploads/2017/12/2516468-570x760.jpg";

// Set the name of local download file - this is what the visitor's file will actually be called when he/she saves it
$fakefilename = "2516468-570x760.jpg";

// Connect:

// Connect to the MySQL database using: hostname, username, password
$link = mysql_connect("$db_host", "$db_username", "$db_password") or die("Could not connect: " . mysql_error());
mysql_select_db("$db_name") or die(mysql_error());
?>