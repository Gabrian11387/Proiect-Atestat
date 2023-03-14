<?php
    if(!isset($pagina))
        $pagina = "";
    include "./stiluri/stiluri.php";
?>  

<head>
    <script src="https://kit.fontawesome.com/6c4b7e3d18.js" crossorigin="anonymous"></script>
</head>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
          <!-- Logo, emblema, iconita simbolica -->
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    <li class="nav-item mx-2">
                        <a class="nav-link <?=$pagina == "acasa"?"active":"" ?>" href="./"> Acasă </a>
                    </li>
                    <li class="nav-item mx-2 dropdown">
                        <a class="nav-link <?=$pagina == "jucatori"?"active":"" ?>" href="jucatori.php"> Votează Jucători </a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link <?=$pagina == "clasamente"?"active":"" ?>" href="clasamente.php"> Clasamente </a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link <?=$pagina == "adauga_personalitate"?"active":""?>" href="adauga_personalitate.php"> Adaugă Personalitate </a>
                    </li>
                </ul>
                <?php
                if(Login() == false && Inreg() == false)
                {
                    ?>
                        <span class="navbar-text mx-2">
                            <button type = "button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ConectModal">
                                Autentificare
                            </button>
                        </span>
                        <span class="navbar-text">
                            <button type = "button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#InregModal">
                                Înregistrare
                            </button>
                        </span>
                    <?php
                }
                else
                {
                    ?>
                    <span class="navbar-text mx-2">
                            <span class = "me-4">
                                <b> <?= htmlspecialchars($_SESSION['nume']) ?> </b>
                                <i class="fa-solid fa-user"></i>
                            </span>
                            <a class="btn btn-primary" href = "logout.php">
                                Deconectare
                            </a>
                    </span>
                    <?php
                }
            ?>
          </div>
        </div>
      </nav>

       <!-- Modal pentru autentificare -->
    <div class="modal fade" id="ConectModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> Autentificare </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="post" action = "module/login.php">
                        <div class="mb-3">
                            <label for="nume" class="control-label">
                                Nume utilizator
                            </label>
                            <input type="text" name = "nume" id = "nume" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="parola" class="control-label">
                                Parolă
                            </label>
                            <input type="password" id = "parola" name="parola" class="form-control" required>
                        </div> 
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary"> Conectare </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
      

    <!-- Modal pentru inregistrare -->
    <div class="modal fade" id="InregModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> Înregistrare </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="post" action = "module/signup.php">
                        <div class="mb-3">
                            <label for="user" class="control-label">
                                Nume utilizator
                            </label>
                            <input type="text" name = "nume" id = "nume" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="parola" class="control-label">
                                Parolă
                            </label>
                            <input type="password" id = "parola" name="parola" class="form-control" required>
                        </div> 
                        <div class="mb-3">
                            <label for="email" class="control-label">
                                Adresă de email
                            </label>
                            <input type="email" class="form-control" id="adresa" name="adresa" placeholder="email@example.com" required>
                        </div>
                        <div class="mb-3">
                            <label for="varsta" class="control-label">
                                Data nașterii
                            </label>
                            <input type="date" class="form-control" id="varsta" name="varsta" required>
                        </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary"> Înregistrare </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <?php
        if($pagina != "acasa")
        {
    ?>
                <br>
    <?php
        }
    ?>
    <!-- Sfarsit modale pentru autentificare si inregistrare -->
    <?php
    MesajAfisare();
    ?>


    