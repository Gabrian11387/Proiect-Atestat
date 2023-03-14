<?php
include "modul-conectare-db.php";
$imagini_fotbal = [];
$rez = mysqli_query($link, "SELECT * FROM clasament_fotbal ORDER BY nume ASC");
$indice = 0;
while($L = mysqli_fetch_assoc($rez))
{
    $imagini_fotbal[$indice] = "imagini/jucatori_fotbal/juc_fotbal".$L['id'].".jpg";
    $indice++;
}

$imagini_tenis = [];
$rez = mysqli_query($link, "SELECT * FROM clasament_tenis ORDER BY nume ASC");
$indice = 0;
while($L = mysqli_fetch_assoc($rez))
{
    $imagini_tenis[$indice] = "imagini/jucatori_tenis/juc_tenis".$L['id'].".jpg";
    $indice++;
}

$imagini_baschet = [];
$rez = mysqli_query($link, "SELECT * FROM clasament_baschet ORDER BY nume ASC");
$indice = 0;
while($L = mysqli_fetch_assoc($rez))
{
    $imagini_baschet[$indice] = "imagini/jucatori_baschet/juc_baschet".$L['id'].".jpg";
    $indice++;
}

$imagini_cricket = [];
$rez = mysqli_query($link, "SELECT * FROM clasament_cricket ORDER BY nume ASC");
$indice = 0;
while($L = mysqli_fetch_assoc($rez))
{
    $imagini_cricket[$indice] = "imagini/jucatori_cricket/juc_cricket".$L['id'].".jpg";
    $indice++;
}

// incepem sa stocam datele celor 3 jucatori cei mai votati din baza de date
$rezultat = mysqli_query($link, "SELECT * FROM clasament_fotbal ORDER BY voturi DESC");
$cnt = 0;

while($L = mysqli_fetch_assoc($rezultat))
{
    $cnt++;
        if($cnt == 1)
        {
            $Jucf1['id'] = $L['id'];
            $Jucf1['nume'] = $L['nume'];
            $Jucf1['varsta'] = $L['varsta'];
            $Jucf1['nat'] = $L['nationalitate'];
            $Jucf1['voturi'] = $L['voturi'];
            $Jucf1['imagine'] = $L['imagine'];
        }

        if($cnt == 2)
        {
            $Jucf2['id'] = $L['id'];
            $Jucf2['nume'] = $L['nume'];
            $Jucf2['varsta'] = $L['varsta'];
            $Jucf2['nat'] = $L['nationalitate'];
            $Jucf2['voturi'] = $L['voturi'];
            $Jucf2['imagine'] = $L['imagine'];
        }

        if($cnt == 3)
        {
            $Jucf3['id'] = $L['id'];
            $Jucf3['nume'] = $L['nume'];
            $Jucf3['varsta'] = $L['varsta'];
            $Jucf3['nat'] = $L['nationalitate'];
            $Jucf3['voturi'] = $L['voturi'];
            $Jucf3['imagine'] = $L['imagine'];
        }
}

//------------------
$rezultat = mysqli_query($link, "SELECT * FROM clasament_tenis ORDER BY voturi DESC");
$cnt = 0;

while($L = mysqli_fetch_assoc($rezultat))
{
    $cnt++;
        if($cnt == 1)
        {
            $Juct1['id'] = $L['id'];
            $Juct1['nume'] = $L['nume'];
            $Juct1['varsta'] = $L['varsta'];
            $Juct1['nat'] = $L['nationalitate'];
            $Juct1['voturi'] = $L['voturi'];
            $Juct1['imagine'] = $L['imagine'];
        }

        if($cnt == 2)
        {
            $Juct2['id'] = $L['id'];
            $Juct2['nume'] = $L['nume'];
            $Juct2['varsta'] = $L['varsta'];
            $Juct2['nat'] = $L['nationalitate'];
            $Juct2['voturi'] = $L['voturi'];
            $Juct2['imagine'] = $L['imagine'];
        }

        if($cnt == 3)
        {
            $Juct3['id'] = $L['id'];
            $Juct3['nume'] = $L['nume'];
            $Juct3['varsta'] = $L['varsta'];
            $Juct3['nat'] = $L['nationalitate'];
            $Juct3['voturi'] = $L['voturi'];
            $Juct3['imagine'] = $L['imagine'];
        }
}

//-------------
$rezultat = mysqli_query($link, "SELECT * FROM clasament_baschet ORDER BY voturi DESC");
$cnt = 0;

while($L = mysqli_fetch_assoc($rezultat))
{
    $cnt++;
        if($cnt == 1)
        {
            $Jucb1['id'] = $L['id'];
            $Jucb1['nume'] = $L['nume'];
            $Jucb1['varsta'] = $L['varsta'];
            $Jucb1['nat'] = $L['nationalitate'];
            $Jucb1['voturi'] = $L['voturi'];
            $Jucb1['imagine'] = $L['imagine'];
        }

        if($cnt == 2)
        {
            $Jucb2['id'] = $L['id'];
            $Jucb2['nume'] = $L['nume'];
            $Jucb2['varsta'] = $L['varsta'];
            $Jucb2['nat'] = $L['nationalitate'];
            $Jucb2['voturi'] = $L['voturi'];
            $Jucb2['imagine'] = $L['imagine'];
        }

        if($cnt == 3)
        {
            $Jucb3['id'] = $L['id'];
            $Jucb3['nume'] = $L['nume'];
            $Jucb3['varsta'] = $L['varsta'];
            $Jucb3['nat'] = $L['nationalitate'];
            $Jucb3['voturi'] = $L['voturi'];
            $Jucb3['imagine'] = $L['imagine'];
        }
}
//--------------
$rezultat = mysqli_query($link, "SELECT * FROM clasament_cricket ORDER BY voturi DESC");
$cnt = 0;

while($L = mysqli_fetch_assoc($rezultat))
{
    $cnt++;
        if($cnt == 1)
        {
            $Juck1['id'] = $L['id'];
            $Juck1['nume'] = $L['nume'];
            $Juck1['varsta'] = $L['varsta'];
            $Juck1['nat'] = $L['nationalitate'];
            $Juck1['voturi'] = $L['voturi'];
            $Juck1['imagine'] = $L['imagine'];
        }

        if($cnt == 2)
        {
            $Juck2['id'] = $L['id'];
            $Juck2['nume'] = $L['nume'];
            $Juck2['varsta'] = $L['varsta'];
            $Juck2['nat'] = $L['nationalitate'];
            $Juck2['voturi'] = $L['voturi'];
            $Juck2['imagine'] = $L['imagine'];
        }

        if($cnt == 3)
        {
            $Juck3['id'] = $L['id'];
            $Juck3['nume'] = $L['nume'];
            $Juck3['varsta'] = $L['varsta'];
            $Juck3['nat'] = $L['nationalitate'];
            $Juck3['voturi'] = $L['voturi'];
            $Juck3['imagine'] = $L['imagine'];
        }
}