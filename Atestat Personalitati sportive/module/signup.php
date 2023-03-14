<?php 
session_start();
include "modul-conectare-db.php";
include_once "modul-functii.php";

if(isset($_POST['nume']) && isset($_POST['parola']) && isset($_POST['adresa']) && isset($_POST['varsta']))
{
    $nume = trim($_POST['nume']);
    $parola = trim($_POST['parola']);
    $adresa = trim($_POST['adresa']);
    $varsta = trim($_POST['varsta']);
}

if(!empty($nume) && !empty($parola) && !empty($adresa) &&
!empty($varsta) && !is_numeric($nume))
{
    $query = "INSERT INTO conturi (nume, parola, adresa, data_nasterii)
    VALUES ('$nume', '$parola', '$adresa', '$varsta')";
    mysqli_query($link, $query);
    $rez = mysqli_query($link, "SELECT * FROM conturi WHERE nume = '$nume'");
    $L = mysqli_fetch_assoc($rez);
    $id = $L['id'];
    $_SESSION['inreg'] = true;
    $_SESSION['id'] = $id;
    $_SESSION['nume'] = $nume;
    header("Location: ../");
    die();
}
else if(is_numeric($nume))
{
    MesajAdaugare('Numele nu poate să conțină doar caractere numerice!', 'danger');
    header("Location: ../");
    die();
}