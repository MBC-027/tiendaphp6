<?php

    include("Basedatos.php");

    if (isset($_POST["botonEnvio"])){   
 
        $Producto=$_POST["Producto"];
        $Marca=$_POST["Marca"];
        $Precio=$_POST["Precio"];
        $Descripción=$_POST["Descripción"];
        $=$_POST["descripcion"];
        $foto=$_POST["foto"];

    
        $transaccion=new Basedatos();

        $consultaSQL="INSERT INTO usuarios(Producto, Marca, Precio, Descripción, foto) VALUES ('$Producto','$Marca','$Precio','$Descripción','$foto')";

        
        $transaccion->agregarDatos($consultaSQL);

    
        header("location:tiendaphp6.php");
               
    }

?>