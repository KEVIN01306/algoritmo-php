<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body style="min-width: 300px;">
    <div class="container d-flex justify-content-center flex-column">
        <h1 class="text-center m-4">
            Ejercicio
        </h1>
        <div class="container">
            <div class="row d-flex justify-content-center">
            <?php 
                for ($numero = 1; $numero < 1000; $numero++) {
                    $contador = 0;
                    $numeroIncremental = 1;
                    while ($numeroIncremental <= $numero) {
                        if ($numero % $numeroIncremental == 0) {
                            $contador++;
                        }
                        $numeroIncremental++;
                    }
                    if ($contador == 2) {
                        echo "<div class='col-2 m-2 p-2 bg-primary text-white text-center'> $numero </div>";
                    }
                }
            ?>
            </div>
            <div class="container mt-5 d-flex justify-content-center flex-column">
            <?php 
                echo "<br>";
                $condicion = 8;
                $empezar = 0;
                while ($empezar <= $condicion-1) {
                    for ($i = 1; $i <= $empezar; $i++) {
                        echo "*";
                    }
                    echo "<br>";

                    $empezar++;
                }
                for ($i = 1; $i <= $condicion; $i++) {
                    echo "+";
                }
                echo "<br>";
                $empezar = 1;
                while ($empezar <= $condicion-1 ) {
                    for ($i = 1; $i <= $condicion - $empezar; $i++) {
                        echo "*";
                    }
                    echo "<br>";
                    $empezar++;
                }
            ?>
            </div>
        </div>          
    </div>
</body>
</html>