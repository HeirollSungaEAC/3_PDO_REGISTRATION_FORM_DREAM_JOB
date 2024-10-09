<!-- Database Configuration Code -->
<?php  

$host = "localhost";
$user = "root";
$password = "";
$dbname = "pokemon";
$dsn = "mysql:host={$host};dbname={$dbname}";
$pdo = new PDO($dsn, $user, $password);

?>