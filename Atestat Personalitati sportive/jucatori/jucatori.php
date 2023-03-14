<?php
    session_start();
    $pagina = "jucatori";
    include_once "module/modul-setari.php";
    include_once "module/modul-functii.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "stiluri/stil.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title> Atestatis </title>
</head>
<body style="background-color: #bae0d6;">

    <?php
        include "module/modul-navigare.php";
    ?>
      <br>
      <br>

    <div class = "container mt-2">
        <div class = "row">
            <div class = "col-5 cartonas" id = "fotbal_cart" style = "position: relative">
               <a class = "stretched-link" href = "jucatori_fotbal.php"></a>
            </div>

            <div class = "col-2">
            </div>

            <div class = "col-5 cartonas" id = "tenis_cart" style = "position: relative">
                <a class = "stretched-link" href = "jucatori_tenis.php"></a>
            </div>

        </div>
        <br>
        <br>
        <br>
        <br>
        <div class = "row">
            <div class = "cartonas col-5" id = "baschet_cart" style = "position: relative">
                <a class = "stretched-link" href = "jucatori_baschet.php"></a>
            </div>
            <div class = "col-2">

            </div>
            <div class = "col-5 cartonas" id = "cricket_cart" style = "position: relative">
                <a class = "stretched-link" href = "jucatori_cricket.php"></a>
            </div>
        </div>

    </div>
    <br>
    <br>
    <?php
        include "footer.php";
    ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>