<?php
    session_start();
    $pagina = "adauga_personalitate";
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
    <style>
        .adauga_imagine{
            float:left;
            display: inline-grid;
            width: 30%;
            height: 370px;
            background-color: white;
            background-image: url('imagini/fundal/profile.png');
            background-size: cover;
            background-repeat: no-repeat;
            border-radius: 10px;
            border: 2px solid white;
        }
        .form_jucator{
            width: 65%;
            display: inline-grid;
            margin-left: 5%;
        }
        .dreapta{
            float: right;
        }
    </style>
</head>
<body style="background-color: #bae0d6;">

    <!-- Bara de navigare -->
    <?php
        include "module/modul-navigare.php";
    ?>

      <div class = "container mt-4 mb-3">
        <div class = "row">
            <?php
            $Id_Butoane = array('formular_fotbal', 'formular_tenis', 'formular_baschet', 'formular_cricket');
            $Nume_butoane = array('Fotbal', 'Tenis', 'Baschet', 'Cricket');
            for($i = 0; $i < 4; $i++)
            {
                ?>
                <div class = "col-3 text-center">
                    <button class = "btn btn-info" onclick = "Afisare_Tabel('<?=$Id_Butoane[$i]?>', '<?=$i?>')" id = "<?=$i?>">
                        <?= $Nume_butoane[$i] ?>
                    </button>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
    <br>

    <div class = "container border border-2 border-light rounded p-4 bg-light" id = "formular_fotbal"> 
        
        <div class = "adauga_imagine">

        </div>
        <form method = "post" class = "form_jucator" action = "upload.php" enctype = "multipart/form-data">
            <div class = "mb-3">
                <label for="nume" class = "control-label">
                    Nume și prenume
                </label>
                <input type="text" name = "nume" id = "nume" class = "form-control" required>
            </div>
            <div class = "mb-3">
                <label for="club" class = "control-label">
                    Club
                </label>
                <input type="text" name = "club" id = "club" class = "form-control" required>
            </div>
            <div class = "mb-3">
                <label for="nationalitate" class = "control-label">
                    Naționalitate
                </label>
                <input type="text" class = "form-control" id = "nationalitate" name = "nationalitate" required>
            </div>
            <div class = "mb-4">
                <label for="varsta" class = "control-label">
                    Vârstă
                </label>
                <input type="number" min = "0" max = "120" class = "form-control" id = "varsta" name = "varsta" required>
            </div>
            <input type = "hidden" name = "categorie" id = "categorie" value = "fotbal">
            <div class = "mb-3">
                <label for="file_fotbal" class = "btn btn-info">
                    Alege imaginea
                </label>
                <input type="file" id = "file_fotbal" name = "file_fotbal" style = "display:none;" oninvalid="alert('Trebuie să alegi o imagine pentru ca jucătorul tău să poată fi adăugat!');" required   >
                <button class = "btn btn-secondary dreapta" type = "submit" name = "submit">
                     Adaugă jucător
                </button>
            </div>
        </form>
    </div>

        


    <div class = "container border border-2 border-light rounded p-4 bg-light" id = "formular_tenis" style = "display: none;">
        
        <div class = "adauga_imagine" style = "transform: scale(0.9);">
        </div>
        <form method = "post" class = "form_jucator" action = "upload.php" enctype = "multipart/form-data">
            <div class = "mb-3 mt-3">
                <label for="nume" class = "control-label mb-2">
                    Nume și prenume
                </label>
                <input type="text" name = "nume" id = "nume" class = "form-control" required>
            </div>
            <div class = "mb-3 mt-1">
                <label for="nationalitate" class = "control-label mb-2">
                    Naționalitate
                </label>
                <input type="text" class = "form-control" id = "nationalitate" name = "nationalitate" required>
            </div>
            <div class = "mb-3 mt-1">
                <label for="varsta" class = "control-label mb-2">
                    Vârstă
                </label>
                <input type="number" min = "0" max = "120" class = "form-control" id = "varsta" name = "varsta" required>
            </div>
            <input type = "hidden" name = "categorie" id = "categorie" value = "tenis">
            <br>
            <br>
            <div class = "mb-1">
                <label for="file_tenis" class = "btn btn-info">
                    Alege imaginea
                </label>
                <input type="file" id = "file_tenis" name = "file_tenis" style = "display:none;" oninvalid="alert('Trebuie să alegi o imagine pentru ca jucătorul tău să poată fi adăugat!');" required>
                <button class = "btn btn-secondary dreapta" type = "submit" name = "submit">
                     Adaugă jucător
                </button>
            </div>
        </form>
    </div>

            

    <div class = "container border border-2 border-light rounded p-4 bg-light" id = "formular_baschet" style = "display: none;">
        
        <div class = "adauga_imagine">

        </div>
        <form method = "post" class = "form_jucator" action = "upload.php" enctype = "multipart/form-data">
            <div class = "mb-3">
                <label for="nume" class = "control-label">
                    Nume și prenume
                </label>
                <input type="text" name = "nume" id = "nume" class = "form-control" required>
            </div>
            <div class = "mb-3">
                <label for="echipa" class = "control-label">
                    Echipa
                </label>
                <input type="text" name = "echipa" id = "echipa" class = "form-control" required>
            </div>
            <div class = "mb-3">
                <label for="nationalitate" class = "control-label">
                    Naționalitate
                </label>
                <input type="text" class = "form-control" id = "nationalitate" name = "nationalitate" required>
            </div>
            <div class = "mb-4">
                <label for="varsta" class = "control-label">
                    Vârstă
                </label>
                <input type="number" min = "0" max = "120" class = "form-control" id = "varsta" name = "varsta" required>
            </div>
            <input type = "hidden" name = "categorie" id = "categorie" value = "baschet">
            <div class = "mb-3">
                <label for="file_baschet" class = "btn btn-info">
                    Alege imaginea
                </label>
                <input type="file" id = "file_baschet" name = "file_baschet" style = "display:none;" oninvalid="alert('Trebuie să alegi o imagine pentru ca jucătorul tău să poată fi adăugat!');" required>
                <button class = "btn btn-secondary dreapta" type = "submit" name = "submit">
                     Adaugă jucător
                </button>
            </div>
        </form>
    </div>

            

    <div class = "container border border-2 border-light rounded p-4 bg-light" id = "formular_cricket" style = "display: none;">
        
        <div class = "adauga_imagine">

        </div>
        <form method = "post" class = "form_jucator" action = "upload.php" enctype = "multipart/form-data">
            <div class = "mb-3">
                <label for="nume" class = "control-label">
                    Nume și prenume
                </label>
                <input type="text" name = "nume" id = "nume" class = "form-control" required>
            </div>
            <div class = "mb-3">
                <label for="rating" class = "control-label">
                    Rating
                </label>
                <input type="number" name = "rating" id = "rating" class = "form-control" required>
            </div>
            <div class = "mb-3">
                <label for="nationalitate" class = "control-label">
                    Naționalitate
                </label>
                <input type="text" class = "form-control" id = "nationalitate" name = "nationalitate" required>
            </div>
            <div class = "mb-4">
                <label for="varsta" class = "control-label">
                    Vârstă
                </label>
                <input type="number" min = "0" max = "120" class = "form-control" id = "varsta" name = "varsta" required>
            </div>
            <input type = "hidden" name = "categorie" id = "categorie" value = "cricket">
            <div class = "mb-3">
                <label for="file_cricket" class = "btn btn-info">
                    Alege imaginea
                </label>
                <input type="file" id = "file_cricket" name = "file_cricket" style = "display:none;" oninvalid="alert('Trebuie să alegi o imagine pentru ca jucătorul tău să poată fi adăugat!');" required>
                <button class = "btn btn-secondary dreapta" type = "submit" name = "submit">
                     Adaugă jucător
                </button>
            </div>
        </form>
    </div>
     
    <br>
    <br>
    <br>
    <br>
    <br>    
    <?php
        include "footer.php";
    ?>
    <script src="scripturi/formular.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>