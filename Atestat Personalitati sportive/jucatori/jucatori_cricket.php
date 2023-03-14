<?php
    session_start();
    $pagina = "jucatori";
    $_SESSION['cartonase'] = "cricket";
    include_once "module/modul-functii.php";
    include "module/modul-conectare-db.php";
    include "module/modul-setari.php";
    include "stiluri/stiluri.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title> Acasa </title>
</head>
<body style = "background-color: #bae0d6;">
    
    <?php
        include "module/modul-navigare.php";
    ?>

    <div class = "container-fluid mt-3">
        <?php
        $cnt = 0;
        $rez = mysqli_query($link, "SELECT * FROM clasament_cricket ORDER BY nume ASC");
        while($L = mysqli_fetch_assoc($rez))
        {   
            // $cnt este numarul de ordine al cartonasului din structurarea in ordine alfabetica a tabelei clasament_fotbal
            ?>
        <div class = "cartonas_jucator mx-2 mb-3" id = "<?=$cnt?>">
            <button class = "stretched-link ascuns_votare" onclick = "Adauga_vot(<?=$cnt?>);"></button>
            <div class = "cartonas_imagine" style = "background-image: url('<?=$imagini_cricket[$cnt]?>');" alt = "Nimic"></div>
            <div class = "cartonas_text">
                <span style = "color:green;"> new </span>
                <h4><b> <?=htmlspecialchars($L['nume'])?> </b> </h4>
            </div>
            <div class = "cartonas_statistici">
                <div class = "stat">
                    <div class = "value"> <?=htmlspecialchars($L['varsta'])?> </div>
                    <div class = "type"> Vârstă </div>
                </div>
                <div class = "stat bordare">
                    <div class = "value"> <?=htmlspecialchars($L['nationalitate'])?> </div>
                    <div class = "type"> Nationalitate </div>
                </div>
                <div class = "stat">
                    <div class = "value"> <?=htmlspecialchars($L['voturi']) ?> </div>
                    <div class = "type"> Voturi </div>
                </div>
            </div>
        </div>
        <?php
        $cnt++;
        }
        ?>
    </div>

    <form method = "post" action = "adaugare_vot.php">
        <button class = "btn btn-success " id = "buton_vot" type = "submit" name = "buton_vot"> Votează </button>
        <input type = "hidden" name = "cart1" id = "cartonas1">
        <input type = "hidden" name = "cart2" id = "cartonas2">
        <input type = "hidden" name = "cart3" id = "cartonas3">
    </form>

    <?php
        include "voturi.php";
        include "footer.php";
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>