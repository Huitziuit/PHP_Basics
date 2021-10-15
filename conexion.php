<?php
    function connect(){

        $user="root";
        $password="@1618@";
        $server="localhost";
        $db="shop";
        $mysqli=new mysqli($server,$user,$password,$db) or die ("error die");
        
      
        if($mysqli->mysqli_connect_errno){
            echo ("conexion fallida".mysql_connect_error());
        }
        return $mysqli;
    }
?>