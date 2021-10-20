<?php

    include("conexion.php");
    
    function cost($costProducts)
    {
        $send=10;
        $IVA=(16*$costProducts)/100;
        $total=$send+$IVA+$costProducts;
        
        echo '<div class="display-8">Cost for Products $'.$costProducts.'<hr>';
        echo 'IVA $'.$IVA.'<hr>';
        echo 'Send $'.$send.'<hr>';
        echo 'Total for all $'.$total.'</div>';
        return $total;
    }

    function registerSale($all){
        $conection=connect();
        $insert="INSERT INTO sales(amount) VALUES ('$all')";
        $result = mysqli_query($conection,$insert);
        if(!$result){
            echo('error mySQL'.mysqli_errno($conection));
        }
        mysqli_close($conection);

    } 

    function lastID(){
        $conection=connect();
        $select="SELECT MAX(id) AS id FROM sales";
        $result = mysqli_query($conection,$select);
        if(!$result){
            echo('error mySQL'.mysqli_errno($conection));
        }else{
        }
        $fila = $result->fetch_assoc();

        mysqli_close($conection);
        return $fila["id"];

    }
?>