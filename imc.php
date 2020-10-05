<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina del calculo</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">  
</head>
<body>  
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="index.php">TALLER CALIFICATIVO</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" >
                    <span class="navbar-toggler-icon"></span>
                </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="punto1.php">Punto1<span class="sr-only">(current)</span></a>
                            </li>                            
                            <li class="nav-item active">
                                <a class="nav-link" href="punto2.php">Punto2<span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="punto3.php">Punto3<span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="punto4.php">Punto4<span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="punto5.php">Punto5<span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="punto6.php">Punto6<span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="punto7.php">Punto7<span class="sr-only">(current)</span></a>
                            </li>                            
                        </ul>
                    
            </div>
        </nav>
    </header>

    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-4 ">   
                
                <form class="mt-3" action="punto2.php" method="POST" >
                         
                  <?php

                           if(isset($_POST["calcular"]))
                        {

 
                                         
                            $peso=$_POST["peso"]; 
                            $altura=$_POST["altura"];
                            $p1=" Peso Insuficiente";
                            $p2=" Normal";
                            $p3=" Sobrepeso G1";
                            $p4=" Sobrepeso G2";
                            $p5=" Obesidad I";
                            $p6=" Obesidad II";
                            $p7=" Obesidad III";
                            $p8=" Obesidad IV";

                            $imc=$_POST["peso"] / ($_POST["altura"] * $_POST["altura"]);

                         
                            switch($imc)
                          {
                            case "<=18.5": echo("tu masa es " .$imc .$p1) ;break;
                    
                            case "p2":  $total = $_POST["n1"] - $_POST["n2"];break;

                            case "p3":  $total = $_POST["n1"] * $_POST["n2"];break;

                            case "p4":  $total = $_POST["n1"] / $_POST["n2"];break;
                           
                            case "p5": $total = $_POST["n1"] + $_POST["n2"];break;
                    
                            case "p6":  $total = $_POST["n1"] - $_POST["n2"];break;

                            case "p7":  $total = $_POST["n1"] * $_POST["n2"];break;

                            case "p8":  $total = $_POST["n1"] / $_POST["n2"];break;

                          } 



                                     
                          if($imc<=18.5)

                            {
                                echo("Su imc es : " .$imc .$p1);
                            }

                            else if($imc > 18.5 && $imc <= 24.9)
                            {
                                echo("Su imc es : " .$imc .$p2);
                            }
                          
                            else if($imc > 25 && $imc <= 26.9)
                            {
                                echo("Su imc es : " .$imc .$p3);
                            }

                            else if($imc > 27 && $imc <= 29.9)
                            {
                                echo("Su imc es : " .$imc .$p4);
                            }

                            else if($imc > 30 && $imc <= 34.9)
                            {
                                echo("Su imc es : " .$imc .$p5);
                            }

                            else if($imc > 35 && $imc <= 39.9)
                            {
                                echo("Su imc es : " .$imc .$p6);
                            }

                            else if($imc > 40 && $imc <= 49.9)
                            {
                                echo("Su imc es : " .$imc .$p7);
                            }

                            else if($imc > 50)
                            {
                                echo("Su imc es : " .$imc .$p8);
                            }

                            else
                            {
                            echo("Ha ingresado un dato erroneo por favor intente una vez mas" .$imc);
                            }

                        }
                        ?>  
                       

                </form> 
                
                            
                </div>
            </div>
        </div>     

    </main>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>


</body>
</html>
