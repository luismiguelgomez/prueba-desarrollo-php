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
    
    $data = file_get_contents("../suplosBackEnd/data-1.json");
    $products = json_decode($data, true);

    $conn = mysqli_connect(
        'localhost',
        'root',
        '',
        'intelcost_bienes'
    );
    
    $query = "SELECT * FROM `bienes`";
    $resultado = mysqli_query($conn, $query);

    echo "<table CELLSPACING='2'>\n";
    echo "<tr>
    <th><h5>Imagen</h5></th>
    <center>
    <th><h5>ID</h5></th>
    <th><h5>Dirección</h5></th>
    <th><h5>Ciudad</h5></th>
    <th><h5>Telefono</h5></th>
    <th><h5>Código Postal</h5></th>
    <th><h5>Tipo</h5></th>
    <th><h5>Precio</h5></th>
    </center>
    </tr>\n";
    while($row=mysqli_fetch_array($resultado)) {                              
        echo"<tr>";
        echo "<td style='width:400px'>";     
        echo "<img src='..\suplosBackEnd\img\home.jpg' alt='Imagen-casa' width='80%'>";
        echo"<td>".$row['id']."</td>";
        echo"<td>".direccion($products, $row['id'] )."</td>";
        echo"<td>".ciudad($products, $row['id'] )."</td>";
        echo"<td>".telefono($products, $row['id'] )."</td>";
        echo"<td>".codigo_Postal($products, $row['id'] )."</td>";
        echo"<td>".tipo($products, $row['id'] )."</td>";
        echo"<td>".precio($products, $row['id'] )."</td>";
        echo"</tr>";
    }
    
    echo "</table>\n";
?>