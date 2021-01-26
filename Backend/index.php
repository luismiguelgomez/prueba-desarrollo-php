<?php

    /*Solution One to lecture of JSON*/
    /*  
    require "../suplosBackEnd/data-1.json";

        $read = new json_file_decode();
        $json = $read->json("data-1.json");
        print_r($json);
    
    */


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
        $tipo = $array["Codigo_Postal"];
        return $tipo;
    }
    function precio ($products, $number) {
        $array = $products[$number];
        $precio = $array["Precio"];
        return $precio;
    }


    /* Mostrar datos del array
    foreach ($products as $product) {
        echo '<pre>'; 
        print_r($product);
        echo '</pre>';
    }
    */


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
    $data = file_get_contents("../suplosBackEnd/data-1.json");

    $products = json_decode($data, true);
  
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


?>