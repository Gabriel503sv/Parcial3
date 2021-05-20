<?php 

$mijson = file_get_contents("users.json");
$miArra = json_decode($mijson, TRUE);


    
for ($i = 0; $i <3; $i++) {
    $nombre[$i] = ($miArra["usuarios"][$i]["nombre"]);
    $apellido[$i] = ($miArra["usuarios"][$i]["apellido"]);
    $edad[$i] = ($miArra["usuarios"][$i]["edad"]);
    $telefono[$i] = ($miArra["usuarios"][$i]["telefono"]);
    $mail[$i] = ($miArra["usuarios"][$i]["email"]);
    $passwor[$i] = ($miArra["usuarios"][$i]["password"]);
    $cargo[$i] = ($miArra["usuarios"][$i]["cargo"]);
    $nacio[$i] =($miArra["usuarios"][$i]["nacionalidad"]);
}

?>

<!DOCTYPE html>
<html lang="en">
<?php require_once "head.php"?>
<body>
<div class="container position-absolute top-50 start-0 translate-middle-y ">
  <div class="row align-items-start  mx-4 my-4 bg-primary text-white border">
    <div class="col-1 border">
      Nombre: <?php echo $nombre[0]?>
    </div>
    <div class="col-1 border">
      Apellido:  <?php echo $apellido[0]?>
    </div>
    <div class="col-1 border">
       Edad: <br> <?php echo $edad[0]?>
    </div>
    <div class="col-1 border">
       Telefono: <?php echo $telefono[0]?>
    </div>
    <div class="col-3 border">
       Correo electrónico: <?php echo $mail[0]?>
    </div>
    <div class="col border">
       Contraseña: <br> <?php echo $passwor[0]?>
    </div>
    <div class="col border">
        Cargo: <?php echo $cargo[0]?>
    </div>
    <div class="col border">
       Nacionalidad: <?php echo $nacio[0]?>
    </div>
  </div>
  <div class="row align-items-start  mx-4 my-4 bg-primary text-white border">
    <div class="col-1 border">
      Nombre: <?php echo $nombre[1]?>
    </div>
    <div class="col-1 border">
      Apellido:  <?php echo $apellido[1]?>
    </div>
    <div class="col-1 border">
       Edad: <br> <?php echo $edad[1]?>
    </div>
    <div class="col-1 border">
       Telefono: <?php echo $telefono[1]?>
    </div>
    <div class="col-3 border">
       Correo electrónico: <br><?php echo $mail[1]?>
    </div>
    <div class="col border">
       Contraseña: <br> <?php echo $passwor[1]?>
    </div>
    <div class="col border">
        Cargo: <?php echo $cargo[1]?>
    </div>
    <div class="col border">
       Nacionalidad: <?php echo $nacio[1]?>
    </div>
  </div>
  <div class="row align-items-start mx-4 my-4 bg-primary text-white border">
    <div class="col-1 border">
      Nombre: <?php echo $nombre[2]?>
    </div>
    <div class="col-1 border">
      Apellido:  <?php echo $apellido[2]?>
    </div>
    <div class="col-1 border">
       Edad: <br> <?php echo $edad[2]?>
    </div>
    <div class="col-1 border">
       Telefono: <?php echo $telefono[2]?>
    </div>
    <div class="col-3 border">
       Correo electrónico: <br><?php echo $mail[2]?>
    </div>
    <div class="col border">
       Contraseña: <br> <?php echo $passwor[2]?>
    </div>
    <div class="col border">
        Cargo: <?php echo $cargo[2]?>
    </div>
    <div class="col border">
       Nacionalidad: <?php echo $nacio[2]?>
    </div>
  </div>
</div>
</body>
</html>