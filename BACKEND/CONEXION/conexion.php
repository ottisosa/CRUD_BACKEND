<?php



class con{

    function conexion(){

    $host = "localhost";
    $usuario = "root";
    $password = "";  
    $bd = "agenda";    
    $puerto = 3306;  
    $con = new mysqli($host, $usuario, $password, $bd, $puerto);   

    return $con;
    
}


}













?>