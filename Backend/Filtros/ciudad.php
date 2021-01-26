<?php

  function ciudad ($products, $number) {
    $array = $products[$number];
    $ciudad = $array["Ciudad"];
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
    $query = "INSERT INTO `paises`(`paises`) VALUES ('".ciudad($products, $i)."')";
    $resultado = mysqli_query($conn, $query);
  }

   
?>

<body>
  <div align="center">                        
      <select>
        <option value="0">Seleccione:</option>
        <?php
         $query = "Select * from paises";
         $resultado = mysqli_query($conn, $query);
          while ($valores = mysqli_fetch_array($resultado)) {
            echo '<option value="'.$valores[id].'">'.$valores[paises].'</option>';
          }
        ?>
      </select>
    </p>
  </div>
</body>

</html>