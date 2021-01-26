<?php

    function valoresId ($products, $number) {
        $array = $products[$number];
        $id = $array["Id"];
        return $id;
    }

    function direccion ($products, $number) {
        $array = $products[$number];
        $direccion = $array["Direccion"];
        return $direccion;
    }

    function ciudad ($products, $number) {
        $array = $products[$number];
        $ciudad = $array["Ciudad"];
        return $ciudad;
    }
    function telefono ($products, $number) {
        $array = $products[$number];
        $telefono = $array["Telefono"];
        return $telefono;
    }
    function codigo_Postal ($products, $number) {
        $array = $products[$number];
        $postal = $array["Codigo_Postal"];
        return $postal;
    }
    function tipo ($products, $number) {
        $array = $products[$number];
        $tipo = $array["Tipo"];
        return $tipo;
    }
    function precio ($products, $number) {
        $array = $products[$number];
        $precio = $array["Precio"];
        return $precio;
    }

/*
    echo "<table>\n";
    echo "<tr>
    <th>Id</th>
    <th>Imagen</th>
    <th>Dirección</th>
    <th>Ciudad</th>
    <th>Teléfono</th>
    <th>Código Postal</th>
    <th>Tipo</th>
    <th>Precio</th>
    </tr>\n";
   

    
  
    for ($i=0; $i < 100 ; $i++) { 
        echo "<tr>\n";
        echo "<td>".valoresId($products, $i)."</td>
        <td>
            <img src='..\suplosBackEnd\img\home.jpg' alt='Imagen-casa' width='60%'>
        </td>
        <td>".direccion($products, $i)."</td>
        <td>".ciudad($products, $i)."</td>
        <td>".telefono($products, $i)."</td>
        <td>".codigo_Postal($products, $i)."</td>
        <td>".tipo($products, $i)."</td>
        <td>".precio($products, $i)."</td>\n";
        echo "</tr>\n";
    }

    echo "</table>\n";
*/

    $data = file_get_contents("../suplosBackEnd/data-1.json");
    $products = json_decode($data, true);

    echo "<table CELLSPACING='2'>\n";
    echo "<tr>
    <th><h5>Imagen</h5></th>
    <center>
    <th><h5>Datos de la vivienda</h5></th>
    </center>
    </tr>\n";
  
    for ($i=0; $i < 100 ; $i++) {    
        echo "<td style='width:400px'>";     
        echo "<img src='..\suplosBackEnd\img\home.jpg' alt='Imagen-casa' width='80%'>
        </td>
        <td ALIGN='left'> 
        <b>Id:</b>".valoresId($products, $i)."<br>".
        "<b>Dirección:</b>".direccion($products, $i)."<br>".
        "<b>Ciudad:</b>".ciudad($products, $i)."<br>".
        "<b>Teléfono:</b>".telefono($products, $i)."<br>".
        "<b>Código Postal:</b>".codigo_Postal($products, $i)."<br>".
        "<b>Tipo:</b>".tipo($products, $i)."<br>".
        "<b>Precio:</b>".precio($products, $i)."<button value = 'Guardar".$i."'>Guardar".
        "</td>";
        echo "</tr>\n";
    }
    echo "</table>\n";

?>