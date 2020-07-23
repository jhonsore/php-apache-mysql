<h1>Hello Cloudreach!</h1>
<h4>Attempting MySQL connection from php...</h4>
<?php
$host = 'mysql';
$user = 'root';
$pass = 'root';
$conn = new mysqli($host, $user, $pass);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected to MySQL successfully!";
}

//----------------
foreach(PDO::getAvailableDrivers() as $driver) {
  echo '<br>'.$driver;
}
echo '<br>';
try {
    $dbh = new PDO('mysql:host='.$host.';dbname=mydb', $user, $pass);
    echo 'PDO connection done!';
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

?>
