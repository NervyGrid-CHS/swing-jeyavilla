<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "swing";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$cname=$_POST['company'];
$street=$_POST['street'];
$city=$_POST['city'];
$state=$_POST['state'];	
$postal=$_POST['postal'];
$mail=$_POST['mail'];
$website=$_POST['website'];
$latitude=$_POST['latitude'];
$longitude=$_POST['longitude'];
$bake=$_POST['checkbox1'];	
$chees=$_POST['checkbox2'];
$arts=$_POST['checkbox3'];
$flower=$_POST['checkbox4'];
$sea=$_POST['checkbox5'];
$fruit=$_POST['checkbox6'];	
$herb=$_POST['checkbox7'];	
$vegetable=$_POST['checkbox8'];
$honey=$_POST['checkbox9'];	
$jams=$_POST['checkbox10'];	
$maple=$_POST['checkbox11'];	
$meats=$_POST['checkbox12'];	
$nuts=$_POST['checkbox13'];	
$plants=$_POST['checkbox14'];	
$soap=$_POST['checkbox15'];
$sql = "INSERT INTO newd (cname,street,city,state,zip,email,website,lat,lon,bakedgoods,cheese,arts_crafts,flowers,sea_foods,fruits,herbs,vegetables,honey,jams,maple,meats,nuts,plants,soap) VALUES ('$cname','$street','$city','$state','$postal','$mail','$website','$latitude','$longitude','$bake','$chees','$arts','$flower','$sea','$fruit','$herb','$vegetable','$honey','$jams','$maple','$meats','$nuts','$plants','$soap')";
header('Location: result.html');
if ($conn->query($sql) === TRUE)
{
}
else 
{
}
$conn->close();
?>