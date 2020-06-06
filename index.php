<?php
//gimnasio bodytech//
$peso = 85;
$altura = 1.78;
$imc = $peso/$altura*$altura;

//condicionales//
if(imc <= 18.4){
    echo("tu imc es de ".imc." Tienes insuficiencia de peso");

} else{
    if(18.5 <= imc <= 24.9){
       echo("tu imc es de ".imc." Tienes un peso normal");
    }
} else {
    if(25 <= imc <= 29.9){
       echo("tu imc es de ".imc." tienes sobrepeso");
    }
} else{
    if (30 <= imc <= 34.9){
        echo("tu imc es de ".imc." Tienes obesidad 1");

    }
} else{
    if(35 <= imc <= 39.9){
        echo("tu imc es de ".imc." tienes obesidad 2");
    }
} else{
    if(imc <= 40){
        echo("tu imc es de ".imc." tienes obesidad 3")
    }

}



?>