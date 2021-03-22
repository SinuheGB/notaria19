<?php

    $destino= "lic.gonzalez.not19pachuca@gmail.com";
    $nombre= $_POST^["nombre"];
    $telefono= $_POST^["telefono"];
    $correo= $_POST^["correo"];
    $consulta= $_POST^["consulta"];
    $contenido= "Nombre: " .$nombre . "\ntelefono: " .$telefono ."\nCorreo: " .$correo ..$correo . "\nconsulta" .$consulta;
    
    mail($destino, "contaco pagina web", $contenido);
    header("location: index.html")
?>