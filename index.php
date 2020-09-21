<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=hea, initial-scale=1.0">
    <title>PrimerTaller</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    
</head>
<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">SUPERMERCADO</a>
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
                            <li class="nav-item">
                                <a class="nav-link" href="punto6.php">punto6</a>
                            </li>
                        </ul>
                    
            </div>
        </nav>
    </header>
    
    <main>   
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-4 ">   
                
                <form class="mt-3" action="index.php" method="POST" >
                    <h4>QUE PUNTO BUSCAS ? </h4>     

                    <form>
                        <input class="form-control mr-sm-2 text-center" type="search" placeholder="Introducir punto" aria-label="Search">
                        <label >
                            <option value="punto1">
                            <a class="nav-link" href="punto1.php"></a></option>
                            <option value="punto2"></option>
                            <option value="punto3"></option>
                            <option value="punto4"></option>
                            <option value="punto5"></option>
                        </label>
                        <button class="btn btn-outline-success form-control mr-sm-2 " type="submit">BUSCAR</button>
                    </form>                           
                
                    
                </form> 
                
                
                <?php  if(isset($_POST["botoncalcular"])): ?> 
                <h4 class="text-danger">
                    <?php  
                      $precioProducto1=$_POST["precio1"];
                      $nombreProducto1=$_POST["producto1"];
                      $costoEnvio=5000;
                      $total=$precioProducto1+$costoEnvio;
                      echo("El total de la compra es de: ".$total);
                    ?>
                </h4>
                <?php  endif ?>
                                    
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