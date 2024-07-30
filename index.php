<?php 

require_once __DIR__ . '/function.php';

$min = 8;
$max = 32;


// var_dump($_SERVER);

if (isset($_GET["length"]) && !empty($_GET["length"])) {
    if ($_GET["length"] < $min || $_GET["length"] > $max) {
        $output = "Generare una password di lunghezza compresa fra $min e $max caratteri";
        # code...
    }else{

        session_start();
        $_SESSION["password"] = $psw;
        $psw = generatePassword($chairList, $_GET['length']);
    }
    $output = 'La password generata è: ' . htmlspecialchars($psw);
}


?>


<!doctype html>
<html lang="en">
    <head>
        <title>PHP Strong Password Generator</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />
        <!-- link css -->
         <link rel="stylesheet" href="./general.css">
        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <div class="container text-center my-5">
            <div class="row">
                <div id="top" class="my-5">
                    <h1>Strong Password Generator</h1>
                    <h2>Genera una password sicura</h2>
                </div>
                <div id="mid" class="my-2">
                    <span>messaggio...</span>
                </div>
                <div id="bot" class="my-2">
                    <div class="d-flex justify-content-around">
                        <span>Lunghezza password:</span>
                        <input type="number" id="tentacles" name="tentacles" min="8" max="32" />
                    </div>
                    <div>
                        Consenti...
                    </div>
                    <div>
                        <button class="btn btn-primary">Invia</button>
                        <button class="btn btn-secondary">Annulla</button>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
