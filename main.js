function validar(){

    
    let mail = document.querySelector("#email").value;
    let pass = document.querySelector("#pass").value;
    let mails = ["diego.herrera@ues.edu.sv","juan@perez.com","diana@dev.net"];
    let contras = ["123456","654321","246810" ];


        if((mail == mails[0] & pass == contras[0]) || (mail == mails[1] & pass == contras[1]) || (mail == mails[2] & pass == contras[2])){
                alert("Dato Validos");
                let element = document.querySelector("#form");
                element.setAttribute("action" , "registrar.php")
        }else{
            alert("Datos incorrectos");
            return false;
        }
        
        
    

}

