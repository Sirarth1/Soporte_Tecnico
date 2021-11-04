<?php
    if(isset($_REQUEST['buscar'])){
        $valores = 'Hola mundo';
        
    }
    else{
        $valores = "Error";
    }
    $valores = json_encode($valores);
    echo $valores;
    
?>