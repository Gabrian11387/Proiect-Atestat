<?php
    session_start();
    $pagina = "acasa";
    include_once "module/modul-functii.php";
    include "stiluri/stiluri.php";
    include "module/modul-setari.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <
    <title> Acasa </title>
    <style>
        .locul_unu{
            border: 2.5px solid yellow !important;
            transform: scale(1.15) !important;
            margin-top: 45px;
        }
        .locul_doi{
            border: 3px solid gray !important;
            transform: scale(1.10) !important;
            margin-top: 45px;
        }
        .locul_trei{
            border: 3px solid brown !important;
            transform: scale(1.05) !important;
            margin-top: 45px;
            margin-left: 150px !important;
        }
        .titlu_prez{
            text-align: center;
            background-color: lightgreen;
            font-family: fantasy;
            border-top-left-radius: 18px;
            border-top-right-radius: 18px;
            width: 100%;
            margin-top: 0;
        }
        .informatii{
            display: inline-grid;
            margin-top:0;
            color: white;
        }
    </style>
</head>
<body class= "pagina_principala">
    
    <!-- Bara de navigare -->
    <?php
        include "module/modul-navigare.php";
    ?>

      <!-- Sfarsit Bara de navigare -->  
      <div class = "hero-image rounded-bottom mb-5">
            <div class = "hero-text">
                <h1> Căștigătorii curenți </h1>
                <p> Cei mai votați jucători pentru fiecare categorie! </p>
            </div>
      </div>

    <div class = "mt-5 mb-5 prez-juc container p-0" style = "background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('imagini/fundal/teren_fobal.jpg');">

        <h1 class = "titlu_prez" style = "background-color:#4f9c52;">
            FOTBAL
        </h1>

      <div class = "cartonas_jucator mx-5 mb-3 locul_trei">
            <div class = "cartonas_imagine" style = "background-image: url('imagini/jucatori_fotbal/<?=$Jucf3['imagine']?>');" alt = "Nimic"></div>
            <div class = "cartonas_text">
                <span style = "color:green;"> new </span>
                <h4><b> <?=$Jucf3['nume']?>  </b> </h4>
            </div>
            <div class = "cartonas_statistici">
                <div class = "stat">
                    <div class = "value"> <?=$Jucf3['varsta']?> </div>
                    <div class = "type"> Vârstă </div>
                </div>
                <div class = "stat bordare">
                    <div class = "value"> <?=$Jucf3['nat']?> </div>
                    <div class = "type"> Nationalitate </div>
                </div>
                <div class = "stat">
                    <div class = "value"> <?=$Jucf3['voturi']?> </div>
                    <div class = "type"> Voturi </div>
                </div>
            </div>
        </div>

        <div class = "cartonas_jucator mx-5 mb-3 locul_unu" >
            <div class = "cartonas_imagine" style = "background-image: url('imagini/jucatori_fotbal/<?=$Jucf1['imagine']?>');" alt = "Nu s-a încărcat imaginea!"></div>
            <div class = "cartonas_text">
                <span style = "color:green;"> new </span>
                <h4><b> <?=$Jucf1['nume']?>  </b> </h4>
            </div>
            <div class = "cartonas_statistici">
                <div class = "stat">
                    <div class = "value"> <?=$Jucf1['varsta']?> </div>
                    <div class = "type"> Vârstă </div>
                </div>
                <div class = "stat bordare">
                    <div class = "value"> <?=$Jucf1['nat']?> </div>
                    <div class = "type"> Nationalitate </div>
                </div>
                <div class = "stat">
                    <div class = "value"> <?=$Jucf1['voturi']?> </div>
                    <div class = "type"> Voturi </div>
                </div>
            </div>
        </div>

        <div class = "cartonas_jucator mx-5 mb-3 locul_doi" >
            <div class = "cartonas_imagine" style = "background-image: url('imagini/jucatori_fotbal/<?=$Jucf2['imagine']?>');" alt = "Nimic"></div>
            <div class = "cartonas_text">
                <span style = "color:green;"> new </span>
                <h4><b> <?=$Jucf2['nume']?>  </b> </h4>
            </div>
            <div class = "cartonas_statistici">
                <div class = "stat">
                    <div class = "value"> <?=$Jucf2['varsta']?> </div>
                    <div class = "type"> Vârstă </div>
                </div>
                <div class = "stat bordare">
                    <div class = "value"> <?=$Jucf2['nat']?> </div>
                    <div class = "type"> Nationalitate </div>
                </div>
                <div class = "stat">
                    <div class = "value"> <?=$Jucf2['voturi']?> </div>
                    <div class = "type"> Voturi </div>
                </div>
            </div>
        </div>

      </div>



        <div class = "mt-5 mb-5 prez-juc container p-0" style = "background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('imagini/fundal/teren_tenis1.jpg');">

        <h1 class = "titlu_prez" style = "background-color:#84d474;">
            TENIS
        </h1>

        <div class = "cartonas_jucator mx-5 mb-3 locul_trei">
            <div class = "cartonas_imagine" style = "background-image: url('imagini/jucatori_tenis/<?=$Juct3['imagine']?>');" alt = "Nimic"></div>
            <div class = "cartonas_text">
                <span style = "color:green;"> new </span>
                <h4><b> <?=$Juct3['nume']?>  </b> </h4>
            </div>
            <div class = "cartonas_statistici">
                <div class = "stat">
                    <div class = "value"> <?=$Juct3['varsta']?> </div>
                    <div class = "type"> Vârstă </div>
                </div>
                <div class = "stat bordare">
                    <div class = "value"> <?=$Juct3['nat']?> </div>
                    <div class = "type"> Nationalitate </div>
                </div>
                <div class = "stat">
                    <div class = "value"> <?=$Juct3['voturi']?> </div>
                    <div class = "type"> Voturi </div>
                </div>
            </div>
        </div>

        <div class = "cartonas_jucator mx-5 mb-3 locul_unu" >
            <div class = "cartonas_imagine" style = "background-image: url('imagini/jucatori_tenis/<?=$Juct1['imagine']?>');" alt = "Nu s-a încărcat imaginea!"></div>
            <div class = "cartonas_text">
                <span style = "color:green;"> new </span>
                <h4><b> <?=$Juct1['nume']?>  </b> </h4>
            </div>
            <div class = "cartonas_statistici">
                <div class = "stat">
                    <div class = "value"> <?=$Juct1['varsta']?> </div>
                    <div class = "type"> Vârstă </div>
                </div>
                <div class = "stat bordare">
                    <div class = "value"> <?=$Juct1['nat']?> </div>
                    <div class = "type"> Nationalitate </div>
                </div>
                <div class = "stat">
                    <div class = "value"> <?=$Juct1['voturi']?> </div>
                    <div class = "type"> Voturi </div>
                </div>
            </div>
        </div>

        <div class = "cartonas_jucator mx-5 mb-3 locul_doi" >
            <div class = "cartonas_imagine" style = "background-image: url('imagini/jucatori_tenis/<?=$Juct2['imagine']?>');" alt = "Nimic"></div>
            <div class = "cartonas_text">
                <span style = "color:green;"> new </span>
                <h4><b> <?=$Juct2['nume']?>  </b> </h4>
            </div>
            <div class = "cartonas_statistici">
                <div class = "stat">
                    <div class = "value"> <?=$Juct2['varsta']?> </div>
                    <div class = "type"> Vârstă </div>
                </div>
                <div class = "stat bordare">
                    <div class = "value"> <?=$Juct2['nat']?> </div>
                    <div class = "type"> Nationalitate </div>
                </div>
                <div class = "stat">
                    <div class = "value"> <?=$Juct2['voturi']?> </div>
                    <div class = "type"> Voturi </div>
                </div>
            </div>
        </div>

        </div>


        <div class = "mt-5 mb-5 prez-juc container p-0" style = "background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('imagini/fundal/teren_baschet.jpg');">

        <h1 class = "titlu_prez" style = "background-color:#cf7a36;">
            BASCHET
        </h1>

        <div class = "cartonas_jucator mx-5 mb-3 locul_trei">
            <div class = "cartonas_imagine" style = "background-image: url('imagini/jucatori_baschet/<?=$Jucb3['imagine']?>');" alt = "Nimic"></div>
            <div class = "cartonas_text">
                <span style = "color:green;"> new </span>
                <h4><b> <?=$Jucb3['nume']?>  </b> </h4>
            </div>
            <div class = "cartonas_statistici">
                <div class = "stat">
                    <div class = "value"> <?=$Jucb3['varsta']?> </div>
                    <div class = "type"> Vârstă </div>
                </div>
                <div class = "stat bordare">
                    <div class = "value"> <?=$Jucb3['nat']?> </div>
                    <div class = "type"> Nationalitate </div>
                </div>
                <div class = "stat">
                    <div class = "value"> <?=$Jucb3['voturi']?> </div>
                    <div class = "type"> Voturi </div>
                </div>
            </div>
        </div>

        <div class = "cartonas_jucator mx-5 mb-3 locul_unu" >
            <div class = "cartonas_imagine" style = "background-image: url('imagini/jucatori_baschet/<?=$Jucb1['imagine']?>');" alt = "Nu s-a încărcat imaginea!"></div>
            <div class = "cartonas_text">
                <span style = "color:green;"> new </span>
                <h4><b> <?=$Jucb1['nume']?>  </b> </h4>
            </div>
            <div class = "cartonas_statistici">
                <div class = "stat">
                    <div class = "value"> <?=$Jucb1['varsta']?> </div>
                    <div class = "type"> Vârstă </div>
                </div>
                <div class = "stat bordare">
                    <div class = "value"> <?=$Jucb1['nat']?> </div>
                    <div class = "type"> Nationalitate </div>
                </div>
                <div class = "stat">
                    <div class = "value"> <?=$Jucb1['voturi']?> </div>
                    <div class = "type"> Voturi </div>
                </div>
            </div>
        </div>

        <div class = "cartonas_jucator mx-5 mb-3 locul_doi" >
            <div class = "cartonas_imagine" style = "background-image: url('imagini/jucatori_baschet/<?=$Jucb2['imagine']?>');" alt = "Nimic"></div>
            <div class = "cartonas_text">
                <span style = "color:green;"> new </span>
                <h4><b> <?=$Jucb2['nume']?>  </b> </h4>
            </div>
            <div class = "cartonas_statistici">
                <div class = "stat">
                    <div class = "value"> <?=$Jucb2['varsta']?> </div>
                    <div class = "type"> Vârstă </div>
                </div>
                <div class = "stat bordare">
                    <div class = "value"> <?=$Jucb2['nat']?> </div>
                    <div class = "type"> Nationalitate </div>
                </div>
                <div class = "stat">
                    <div class = "value"> <?=$Jucb2['voturi']?> </div>
                    <div class = "type"> Voturi </div>
                </div>
            </div>
        </div>

        </div>


        <div class = "mt-5 mb-5 prez-juc container p-0" style = "background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('imagini/fundal/teren_cricket.jpg');">

        <h1 class = "titlu_prez" style = "background-color:#b33832;">
            CRICKET
        </h1>

        <div class = "cartonas_jucator mx-5 mb-3 locul_trei">
            <div class = "cartonas_imagine" style = "background-image: url('imagini/jucatori_cricket/<?=$Juck3['imagine']?>');" alt = "Nimic"></div>
            <div class = "cartonas_text">
                <span style = "color:green;"> new </span>
                <h4><b> <?=$Juck3['nume']?>  </b> </h4>
            </div>
            <div class = "cartonas_statistici">
                <div class = "stat">
                    <div class = "value"> <?=$Juck3['varsta']?> </div>
                    <div class = "type"> Vârstă </div>
                </div>
                <div class = "stat bordare">
                    <div class = "value"> <?=$Juck3['nat']?> </div>
                    <div class = "type"> Nationalitate </div>
                </div>
                <div class = "stat">
                    <div class = "value"> <?=$Juck3['voturi']?> </div>
                    <div class = "type"> Voturi </div>
                </div>
            </div>
        </div>

        <div class = "cartonas_jucator mx-5 mb-3 locul_unu" >
            <div class = "cartonas_imagine" style = "background-image: url('imagini/jucatori_cricket/<?=$Juck1['imagine']?>');" alt = "Nu s-a încărcat imaginea!"></div>
            <div class = "cartonas_text">
                <span style = "color:green;"> new </span>
                <h4><b> <?=$Juck1['nume']?>  </b> </h4>
            </div>
            <div class = "cartonas_statistici">
                <div class = "stat">
                    <div class = "value"> <?=$Juck1['varsta']?> </div>
                    <div class = "type"> Vârstă </div>
                </div>
                <div class = "stat bordare">
                    <div class = "value"> <?=$Juck1['nat']?> </div>
                    <div class = "type"> Nationalitate </div>
                </div>
                <div class = "stat">
                    <div class = "value"> <?=$Juck1['voturi']?> </div>
                    <div class = "type"> Voturi </div>
                </div>
            </div>
        </div>

        <div class = "cartonas_jucator mx-5 mb-3 locul_doi" >
            <div class = "cartonas_imagine" style = "background-image: url('imagini/jucatori_cricket/<?=$Juck2['imagine']?>');" alt = "Nimic"></div>
            <div class = "cartonas_text">
                <span style = "color:green;"> new </span>
                <h4><b> <?=$Juck2['nume']?>  </b> </h4>
            </div>
            <div class = "cartonas_statistici">
                <div class = "stat">
                    <div class = "value"> <?=$Juck2['varsta']?> </div>
                    <div class = "type"> Vârstă </div>
                </div>
                <div class = "stat bordare">
                    <div class = "value"> <?=$Juck2['nat']?> </div>
                    <div class = "type"> Nationalitate </div>
                </div>
                <div class = "stat">
                    <div class = "value"> <?=$Juck2['voturi']?> </div>
                    <div class = "type"> Voturi </div>
                </div>
            </div>
        </div>

        </div>

        <?php
            include "footer.php";
        ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>