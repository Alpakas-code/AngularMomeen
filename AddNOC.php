<?php
$server = "localhost";
$login = "root";
$pass = "";
$connexion = new PDO("mysql:host=$server;dbname=naroteamdb",$login,$pass);


$NOC = $_POST['NOC'];
$email = $_POST["email"];
$password = $_POST["password"];
$zone = $_POST["zone"];
$messageState =$connexion->prepare(" select * from `zone` where `Emplacement` ='".$zone."';");
$test = $messageState->execute();
$idZone = $messageState->fetchAll();

foreach($idZone as $admin)
 {
     $id = $admin['id'];
     echo $id;
 }
$messageStat =$connexion->prepare(" Insert into noc values(NULL,'".$NOC."','".$email."','".$password."','".$id."',1);");
$executeIsOk = $messageStat->execute();
header("Location: blank.php");
?>