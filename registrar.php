<?php 

$mijson = file_get_contents("users.json");
$miArra = json_decode($mijson, TRUE);

for ($i=0; $i <3 ; $i++) { 
    $email[$i] =  isset($_GET["email"]) && $_GET["email"] == $miArra["usuarios"][$i]["email"];
    $password[$i] = isset($_GET["pass"]) && $_GET["pass"] ==  $miArra["usuarios"][$i]["password"];
}


$a = false;


    if(empty($_GET)){
        echo "por favor rellene el formulario";
    }else{
       $i = 0;
        do {
            
            if(true == $email[$i] && true == $password[$i]){
                $nombre = ($miArra["usuarios"][$i]["nombre"]);
                $apellido = ($miArra["usuarios"][$i]["apellido"]);
                $edad = ($miArra["usuarios"][$i]["edad"]);
                $telefono = ($miArra["usuarios"][$i]["telefono"]);
                $mail = ($miArra["usuarios"][$i]["email"]);
                $passwor = ($miArra["usuarios"][$i]["password"]);
                $cargo = ($miArra["usuarios"][$i]["cargo"]);
                $nacio = ($miArra["usuarios"][$i]["nacionalidad"]);


                $a = true;
            }else{
              $i++;
            }
            

        } while ($a == false );
        

            
    }

    
    


?>

<!DOCTYPE html>
<html lang="en">
<?php require_once "head.php"?>
<body>
<div class="position-absolute top-50 start-0 translate-middle-y">
  <div class="row ">
    <div class="col-4 border mx-4">
        <div class="row bg-primary text-white p-2">Datos de trabajo</div>
        <div class="row m-4">
            <div class="row ">Nombre de pila: <?php echo $nombre?></div>
            <div class="row ">cargo: <?php echo $cargo?></div>
            <div class="row ">nacionalidad: <?php echo $nacio?></div>
        </div>
        
    </div>
    <div class="col-6 border">
    <div class="row bg-primary text-white p-2">Datos Personales</div>
        <div class="row m-4">
            <div class="row ">Nombre: <?php echo $nombre?> <?php echo $apellido?>  </div>
            <div class="row ">edad: <?php echo $edad?></div>
            <div class="row ">Telefono: <?php echo $telefono?></div>
            <div class="row ">E-mail: <?php echo $mail?></div>
        </div>
    </div>
  </div>
  <div class="m-4 d-grid gap-2 col-3 mx-auto my-3 ">
    <a href="tarjetas.php" class="btn btn-primary text-white ">Todos los usuarios</a>

  </div>
</div>
</body>

</html>
