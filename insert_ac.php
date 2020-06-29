<?php
$connection = mysql_connect("localhost", "ediznirun", "edz115555"); 

$db = mysql_select_db("ponlinH7_dbediz", $connection); 

if(isset($_POST['submit'])){ 

$yemek_ismi = $_POST['yemek_ismi'];
$malzemeler = $_POST['malzemeler'];
$yapýlýþý = $_POST['yapýlýþý'];


$query = mysql_query("insert into recipes(yemek_ismi, malzemeler, student_contact, student_address) values ('$yemek_ismi', '$malzemeler', '$yapýlýþý')");
echo "<br/><br/><span>Data Inserted successfully...!!</span>";

mysql_close($connection); // Closing Connection with Server
?>