<?php

echo '<h1>Primera DB Vehículos</h1>';
echo '<h3>Lista de vehículos</h3>';

function showvehiculos() {
    $db = new PDO('mysql:host=localhost;dbname=db_concesionaria;charset=utf8', 'root', '');

    $query = $db->prepare('SELECT * FROM vehículos');
    $query->execute();

   $vehiculos = $query->fetchAll(PDO::FETCH_OBJ);


    //echo "<pre>";
    //var_dump($vehiculos);
    //echo "</pre>";




 echo "<ul>";
     
    foreach($vehiculos as $vehiculo){

        echo "<li>$vehiculo->id_vehiculo - $vehiculo->modelo - $vehiculo->año- (Kilometraje:$vehiculo->kilometraje) - $vehiculo->version - $vehiculo->categoría </li>";




    }




 echo "</ul>";

        
}


showvehiculos();