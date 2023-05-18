<?php

$con = mysqli_connect("localhost","root","","blog");
    
if(!$con){
    die('Erro de conexão' . mysqli_connect_error());
}

?>