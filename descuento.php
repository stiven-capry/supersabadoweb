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
    </header>

    <main>
        <form class="mt-3" action="descuento.php" method="POST">
                <?php if (isset ($_POST["cantInputs"])) { ?>
                           
                <?php  for($i=1; $i<= $_POST["cantInputs"]; $i++) {?>
                <input type="text" name="" value="contaco[]" placeholder="contacto"> <br>
                <?php } ?>
                <?php } ?>
                <input type= "submit" value="PROCESAR">
                <br> <br> <br> <br>
                <?php  for($i=1; $i<= $_POST["total"]; $i++) {?>
                <input type="text" name="" value="gentotal[]" placeholder="gentotal"> <br>
                <?php } ?>
                <?php  ?>
                <input type= "submit" value="PROCESAR">
                          

        </form>

    </main>

    <footer>
    </footer>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>