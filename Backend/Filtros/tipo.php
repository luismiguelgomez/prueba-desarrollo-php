<?php

  function tipo ($products, $number) {
    $array = $products[$number];
    $ciudad = $array["Tipo"];
    return $ciudad;
  }

  $data = file_get_contents("../suplosBackEnd/data-1.json");
  $products = json_decode($data, true);
  
  $conn = mysqli_connect(
    'localhost',
    'root',
    '',
    'intelcost_bienes'
  );

  for ($i=0; $i < 100 ; $i++) {    
    $query = "INSERT INTO `tipo`(`tipo`) VALUES ('".tipo($products, $i)."')";
    $resultado = mysqli_query($conn, $query);
  }

   
?>

<body>
  <div align="center">                        
      <select name="tipo-seleccionado">
        <option value="0">Seleccione:</option>
        <?php
         $query = "Select * from tipo";
         $resultado = mysqli_query($conn, $query);
          while ($valores = mysqli_fetch_array($resultado)) {
            echo '<option value="'.$valores[id].'">'.$valores[tipo].'</option>';
          }
        ?>
      </select>
    </p>
  </div>
</body>

</html>