<?php
$server = "localhost";
$login = "root";
$pass = "";
$connexion = new PDO("mysql:host=$server;dbname=naroteamdb",$login,$pass);



if(isset($_POST['delete']))
{
    $idEnt=$_GET['idEnt'];
    $pdoStat = $connexion->prepare("UPDATE noc
                                    SET display = 'No'
                                    WHERE id = $idEnt;"
                                    );
    
    $exec = $pdoStat->execute();
    header("Location:blank.php");
}
if(isset($_POST['reactivate']))
{
    $idEnt=$_GET['idEnt'];
    $pdoStat = $connexion->prepare("UPDATE noc
                                    SET display = '1'
                                    WHERE id = $idEnt;"
                                    );
    
    $exec = $pdoStat->execute();
    header("Location:blank.php");
}





if(isset($_POST['deleteM']))
{
    $idEnt=$_GET['idEnt'];
    $pdoStat = $connexion->prepare("UPDATE mainteneur
                                    SET display = '0'
                                    WHERE id = $idEnt;"
                                    );
    
    $exec = $pdoStat->execute();
    header("Location:basic-table.php");
}
if(isset($_POST['reactivateM']))
{
    $idEnt=$_GET['idEnt'];
    $pdoStat = $connexion->prepare("UPDATE mainteneur
                                    SET display = '1'
                                    WHERE id = $idEnt;"
                                    );
    
    $exec = $pdoStat->execute();
    header("Location:basic-table.php");
}



if(isset($_POST['deleteZ']))
{
    $idEnt=$_GET['idEnt'];
    $pdoStat = $connexion->prepare("UPDATE zone
                                    SET display = '0'
                                    WHERE id = $idEnt;"
                                    );
    
    $exec = $pdoStat->execute();
    header("Location:zone.php");
}
if(isset($_POST['reactivateZ']))
{
    $idEnt=$_GET['idEnt'];
    $pdoStat = $connexion->prepare("UPDATE zone
                                    SET display = '1'
                                    WHERE id = $idEnt;"
                                    );
    
    $exec = $pdoStat->execute();
    header("Location:zone.php");
}
?>