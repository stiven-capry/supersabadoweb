<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=hea, initial-scale=1.0">
    <title>TALLER CALIFICATIVO</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">  
</head>
<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="index.php">TALLER CALIFICATIVO</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
                <div class="col-10 ">   
                
                <form class="mt-5" action="index.php" method="POST" >

                    <h4>Taller</h4><br>

                        <h5> 1. Hacer un programa en PHP que permita mostrar en pantalla la suma, resta, multiplicación, de dos números enteros almacenados en 2, variables diferentes (utilice formularios HTML).</h5><br>                    
                        <h5> 2. El gimnasio Bodytech, lo contrata para desarrollar una aplicación web que permita a sus usuarios calcular el índice de masa corporal basado en el formula:
                            <h6>
                            𝑀𝐶=𝑃𝐸𝑆𝑂𝐴𝐿𝑇𝑈𝑅𝐴∗𝐴𝐿𝑇𝑈𝑅𝐴
                            </h6>
                            <br>
                            <img src="img/tablapeso.png" class="img-fluid" alt="img1">  <br>
                        </h5><br>                            
                        
                        <h5> 3. Codificar un programa en PHP para la tienda Spring Step que tiene una promoción de descuento, esta dependerá del número de zapatos que se compren.                        
                            <h6>
                                <li>Si son 3 pares se les dará un 10% de descuento al cliente sobre el total de la compra;</li><br>
                                <li>Si el número de zapatos es mayor 3 pares, pero menor o igual de 8 pares, se le otorga un 20% de descuento</li><br>
                                <li>si son más 8 pares de zapatos se otorgará un 50% de descuento. Defina la cantidad de variables que necesite, el costo de cada par de zapatos y establezca el valor total de la compra de zapatos. </li>                              
                            </h6><br>                        
                        </h5>
                       
                        <h5> 4. Hacer un programa en PHP para ayudar a un trabajador de Postobón a saber cuál será su sueldo semanal, se sabe que, si trabaja 40 horas o menos, se le pagará $20000 por hora, pero si trabaja más de 40 horas entonces las horas extras se le pagarán a $25000 por hora.</h5><br>
                        
                        <h5> 5. Bancolombia contrata sus servicios de desarrollador para realizar un programa en PHP que permita:</h5><br>
                            <li>Almacenar en variables información de nombre, teléfono dirección y salario de 5 usuarios de una sucursal llamada sucursal A.</li><br>
                            <li>Sumar todos los salarios de los usuarios de la sucursal A en una sola variable llamada $sumatoriaSalarios y así poder comparar dicho valor con las sucursales B cuyo valor de salarios mensuales es de 40.000.000 y la sucursal C cuyo valor de salarios mensuales es de 32.000.000.
                            Permita que su código muestre cual sucursal tiene la mejor sumatoria de salarios y además muestre en pantalla la información completa de los 5 usuarios de la sucursal A</li><br>

                        <h5> 6. Calcule y almacene en un Array los n primeros números pares (el usuario debe indicar cuantos números pares se deben calcular). Imprima en una tabla cada uno de estos números.</h5>

                        <h5> 7. Diseñe un formulario que permita agregar 5 frutas para preparar un salpicón, al ejecutar el programa se debe recibir una url con la imagen de cada fruta ingresada y mostrar en orden la imagen y el nombre de cada fruta</h5><br>

                        <h5> 8. La federación nacional de fútbol necesita de sus servicios como desarrollador de software, para codificar una función en PHP que permita calcular la edad de los jugadores, de acuerdo al año de nacimiento de estos. Declare la función calcularEdad() y pruebe su funcionamiento.</h5><br>

                        <h5> 9. La federación nacional de fútbol también necesita que usted codifique un nuevo programa para establecer el biotipo de los jugadores, teniendo en cuenta la estatura de estos. La clasificación internacional del Biotipo de futbolista es:</h5><br>
                            <li> Estatura "<" 1.70 m (Biotipo Bajo) </li><br>
                            <li> 1.70 m <=Estatura < 1.80 m (Biotipo Promedio) </li><br>
                            <li> Estatura >= 1,80 m (Biotipo Superior) </li><br>

                        <h5> 10. El seleccionador nacional de la selección de fútbol de Colombia Carlos Queiroz, necesita de sus servicios como desarrollador de software, para almacenar y organizar la información de los mejores jugadores colombianos alrededor del mundo, para ello él le suministra la siguiente información:</h5><br>
                            <li> Cree un arreglo multidimensional donde guarde la información de cada jugador calculando la edad y el biotipo de estos a partir de los datos suministrados por Queiroz y muestre los resultados en pantalla uno a uno</li>
                           <img src="img/tablajugador.png" class="img-fluid" alt="img2">
                       
                        
                </form> 
                               
                </div>
            </div>
        </div>          
    </main>

    <footer>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>