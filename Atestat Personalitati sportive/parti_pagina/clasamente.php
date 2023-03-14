<?php
    session_start();
    $pagina = "clasamente";
    include_once "module/modul-setari.php";
    include_once "module/modul-functii.php";
    include "module/modul-conectare-db.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "http://localhost/Atestat%20Personalitati%20sportive/stiluri/stil.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title> Acasa </title>
</head>
<body style="background-color: #bae0d6;">
    
    <!-- Bara de navigare -->
    <?php
        include "module/modul-navigare.php";
    ?>

    <div class = "container mt-3">
        <div class = "row">
            <?php
            $Id_Butoane = array('tabel_fotbal', 'tabel_tenis', 'tabel_baschet', 'tabel_cricket');
            $Nume_butoane = array('Fotbal', 'Tenis', 'Baschet', 'Cricket');
            for($i = 0; $i < 4; $i++)
            {
                ?>
                <div class = "col-3 text-center">
                    <button class = "btn btn-info" onclick = "Afisare_Tabel('<?=$Id_Butoane[$i]?>')">
                        <?= $Nume_butoane[$i] ?>
                    </button>
                </div>
                <?php
            }
            ?>
        </div>
    </div>

    <br>
    <!-- Tabel fotbal -->
    <div class = "container" id = "tabel_fotbal">
    <?php 
        $rez = mysqli_query($link, "SELECT * FROM clasament_fotbal ORDER BY voturi DESC");
        if(! $rez)
        {
            ?>
            <div class = text-danger bg-light p-3 rounded">
                Eroare la interogare
            </div>
            <?php
        }
        elseif(mysqli_num_rows($rez) == 0)
        {
            ?>
            <div class = "alert alert-info">
                Niciun jucator momentan
            </div>
            <?php
        }
        else
        {
            ?>
            <table class="table table-bordered table-light text-center">
                <thead>
                    <tr>
                        <th scope = "col"> # </th>
                        <th scope = "col"> Jucător </th>
                        <th scope = "col"> Club </th>
                        <th scope = "col"> Naționalitate </th>
                        <th scope = "col"> Vârstă </th>
                        <th scope = "col"> Voturi </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $cnt = 0;
                    while($L = mysqli_fetch_assoc($rez))
                    {
                        $cnt++;
                        ?>
                        <tr>
                            <td> <?=$cnt?> </td>
                            <td> <?=$L['nume']?> </td>
                            <td> <?=$L['club']?> </td>
                            <td> <?=$L['nationalitate']?> </td>
                            <td> <?=$L['varsta'] ?> </td>
                            <td> <?= $L['voturi'] ?> </td>
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>
            <?php
        }
    ?>
    </div>

    <!-- Tabel tenis -->
    <div class = "container" style = "display:none" id = "tabel_tenis">
        <?php
        $rez = mysqli_query($link, "SELECT * FROM clasament_tenis ORDER BY voturi DESC");
        if(! $rez)
        {
            ?>
            <div class = "text-danger bg-light p-3 rounded">
                Eroare la inerogare!
            </div>
            <?php
        }
        elseif(mysqli_num_rows($rez) == 0)
        {
            ?>
            <div class = "alert alert-info">
                Niciun jucator momentan
            </div>
            <?php
        }
        else
        {
            ?>
            <table class="table table-bordered table-light text-center">
                <thead>
                    <tr>
                        <th scope = "col"> # </th>
                        <th scope = "col"> Jucător </th>
                        <th scope = "col"> Naționalitate </th>
                        <th scope = "col"> Vârstă </th>
                        <th scope = "col"> Voturi </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $cnt = 0;
                    while($L = mysqli_fetch_assoc($rez))
                    {
                        $cnt++;
                        ?>
                        <tr>
                            <td> <?=$cnt?> </td>
                            <td> <?=$L['nume']?> </td>
                            <td> <?=$L['nationalitate']?> </td>
                            <td> <?=$L['varsta'] ?> </td>
                            <td> <?= $L['voturi'] ?> </td>
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>
            <?php
        }
    ?>

    </div>
    <div class = "container" id = "tabel_baschet" style = "display: none">
        <?php 
            $rez = mysqli_query($link, "SELECT * FROM clasament_baschet ORDER BY voturi DESC");
            if(! $rez)
            {
                ?>
                <div class = "text-danger bg-light p-3 rounded">
                Eroare la inerogare!
                </div>
                <?php
            }
            elseif($rez && mysqli_num_rows($rez) == 0)
            {
                ?>
                <div class = "alert alert-info">
                    Niciun jucator momentan
                </div>
                <?php
            }
            else
            {
                ?>
                <table class="table table-bordered table-light text-center">
                <thead>
                    <tr>
                        <th scope = "col"> # </th>
                        <th scope = "col"> Jucător </th>
                        <th scope = "col"> Echipa </th>
                        <th scope = "col"> Naționalitate </th>
                        <th scope = "col"> Vârstă </th>
                        <th scope = "col"> Voturi </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $cnt = 0;
                    while($L = mysqli_fetch_assoc($rez))
                    {
                        $cnt++;
                        ?>
                        <tr>
                            <td> <?=$cnt?> </td>
                            <td> <?=$L['nume']?> </td>
                            <td> <?=$L['echipa']?> </td>
                            <td> <?=$L['nationalitate']?> </td>
                            <td> <?=$L['varsta'] ?> </td>
                            <td> <?= $L['voturi'] ?> </td>
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>
            <?php
            }
        ?>
    </div>
    <div class = "container" id = "tabel_cricket" style = "display: none">
        <?php
        $rez = mysqli_query($link, "SELECT * FROM clasament_cricket ORDER BY voturi DESC");
        if(! $rez)
        {
            ?>
            <div class = "text-danger bg-light p-3 rounded">
                Eroare la inerogare!
            </div>
            <?php
        }
        elseif(mysqli_num_rows($rez) == 0)
        {
            ?>
            <div class = "alert alert-info">
                Niciun jucator momentan
            </div>
            <?php
        }
        else
        {
            ?>
            <table class="table table-bordered table-light text-center">
                <thead>
                    <tr>
                        <th scope = "col"> # </th>
                        <th scope = "col"> Jucător </th>
                        <th scope = "col"> Nationalitate </th>
                        <th scope = "col"> Vârstă </th>
                        <th scope = "col"> Rating </th>
                        <th scope = "col"> Voturi </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $cnt = 0;
                    while($L = mysqli_fetch_assoc($rez))
                    {
                        $cnt++;
                        ?>
                        <tr>
                            <td> <?=$cnt?> </td>
                            <td> <?=$L['nume']?> </td>
                            <td> <?=$L['nationalitate']?> </td>
                            <td> <?=$L['varsta'] ?> </td>
                            <td> <?=$L['rating']?> </td>
                            <td> <?= $L['voturi'] ?> </td>
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>
            <?php
        }
        ?>
    </div>

    <?php
        include "footer.php";
    ?>
    <script src = "scripturi/clasament.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>