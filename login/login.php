<?php
 Session_start();
 $server = "localhost";
 $login = "root";
 $pass = "";
 $connexion = new PDO("mysql:host=$server;dbname=naroteamdb",$login,$pass);

 $pdoStat = $connexion->prepare("SELECT * from admin");
 
 $executeIsOk = $pdoStat->execute();
 $admin = $pdoStat->fetchAll();
    print_r($_POST['submit']);

 if(isset($_POST['submit']))
 {
   $bool = false;
     foreach($admin as $value)
     {
         if ($_POST['password'] == $value['password'] & (strtoupper($_POST['email']) == strtoupper($value['email'])))
         {
             $_SESSION['id']=$value['id'];
             $bool = true;
             echo $bool;
         }
     }
     if($bool)
     {
       echo"<script> 
             document.location.href='../index.php'; </script>";
     }
     else
     {
       echo "<script>
       alert('Invalid');
       </script>";
     }
 } 
?>