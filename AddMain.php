<?php
$server = "localhost";
$login = "root";
$pass = "";
$connexion = new PDO("mysql:host=$server;dbname=naroteamdb",$login,$pass);

$nom= $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$cin = $_POST['cin'];
$phone = $_POST['phone'];
$password = $_POST['password'];
$zone = $_POST['zone'];


$messageState =$connexion->prepare(" select * from `zone` where `Emplacement` ='".$zone."';");
$test = $messageState->execute();
$idZone = $messageState->fetchAll();

foreach($idZone as $admin)
 {
     $id = $admin['id'];
     echo $id;
 }
$messageStat =$connexion->prepare(" Insert into mainteneur values(NULL,'".$nom."','".$prenom."','".$email."','".$password."','".$cin."','https://www.pngitem.com/pimgs/m/599-5993173_transparent-mechanic-png-mechanic-icon-png-png-download.png','".$phone."','NULL','".$id."',1);");
$executeIsOk = $messageStat->execute();
header("Location: basic-table.php");
?>