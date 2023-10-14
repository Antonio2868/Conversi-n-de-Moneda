<?php
  require_once 'Conversion.php';

  if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $conversion = new Conversion($_POST);
  
    $resultado = $conversion->conversion();
  }
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Moneda</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <div class="contenedormadre">
   <h2> Cambio de Divisas</h2> 
      <div class="container">
        <form method="POST">
        <input type="number" name="cantidad"  placeholder="xxx" required><br><br>
        <input class="btn-submit" type="submit" value="Hacer Cambio"><br><br>
        <p>La cantidad en bolivares es: <?php echo ($resultado) ? $resultado : '' ;?></p>
      </form>
      <h3>Antonio Lozano C.I. 28.688.178 Programación II Sección 1</h3>
      </div> 

        </div>
    </main>
</body>
</body>
</html>