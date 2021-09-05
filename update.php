<?php
Session_Start();
 $server = "localhost";
 $login = "root";
 $pass = "";
 $connexion = new PDO("mysql:host=$server;dbname=naroteamdb",$login,$pass);

 
 $fullName = $_POST['fullName'];
 $email = $_POST['email'];
 $password = $_POST['password'];
 $phonenum = $_POST['phonenum'];
 $country = $_POST['country'];
 
 $date = date('g:i: a D-M-y');
 $time = $date;
 $pdoStat = $connexion->prepare("
 UPDATE admin SET fullName ='".$fullName."' , email ='".$email."', password ='".$password."' , phonenum = '".$phonenum.
 "' , country = '".$phonenum."' where id = '".$_SESSION['id']."';");

 $executeIsOk = $pdoStat->execute();
 $executeIsOk = $messageStat->execute();
 $result = $pdoStat->fetchAll();
echo'
<script>
document.location.href="profile.php";
alert("Updated successfully !");
</script>
';
?>