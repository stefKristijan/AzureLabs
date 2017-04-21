<?php
$host = "127.0.0.1:52972";
$user = "azure";
$pwd = "6#vWHD_$";
$db = "localdb";
//Database=localdb;Data Source=127.0.0.1:52972;User Id=azure;Password=6#vWHD_$
// Connect to database.
try {
$conn = new PDO( "mysql:host=$host;dbname=$db", $user, $pwd);
$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
}
catch(Exception $e){
die(var_dump($e));
}

?>