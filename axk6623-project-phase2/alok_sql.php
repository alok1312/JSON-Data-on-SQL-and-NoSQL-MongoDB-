 <?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "CSE5335";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connection Created";

$json = file_get_contents("http://restcountries.eu/rest/v1/all");
$json_data = json_decode($json);

$i=0;
foreach($json_data as $each)
{
$name[]=$each-> name;
$capital[]=$each-> capital;
$sql ="INSERT INTO COUNTRY (name, capital) VALUES('$name[$i]', '$capital[$i]')";

if($conn -> query($sql) == TRUE)
{
echo "Sucessfully Inserted";
}
else 
{
echo "Error: ".$sql. "<br>" . $conn-> error;
}
$i++;
}
$conn-> close(); 
?>

