<?php
    session_start();
    include "modul-conectare-db.php";
    include_once "modul-functii.php";

    if(isset($_POST['nume']) && isset($_POST['parola']))
    {
        $nume = trim($_POST['nume']);
        $parola = trim($_POST['parola']);
    }
    
    if(!empty($nume) && !empty($parola) && !is_numeric($nume))
    {
        $parola_hash = password_hash($parola, PASSWORD_DEFAULT);
        $query = "SELECT * FROM conturi WHERE nume = '$nume' LIMIT 1";

        $rez = mysqli_query($link, $query);
        if($rez && mysqli_num_rows($rez) > 0)
        {
            $date_utilizator = mysqli_fetch_assoc($rez);
            if(password_verify($date_utilizator['parola'], $parola_hash))
            {
                $_SESSION['id'] = $date_utilizator['id'];
                $_SESSION['nume'] = $nume;
                MesajAdaugare('Bine ai venit, '.$nume.'!', 'success');
                header("Location: ../");
                // iesim din folderul module si mergem in index.php
                die();
            }
        }
        // daca datele au fost introduse, dar nu sunt corecte
        MesajAdaugare('Nume/parola incorecte', 'danger');
        header("Location: login.php");
        die();
    }
    else
    {
        echo "Campurile nu sunt completate corespunzator";
    }