<?php
    session_start();
    include "module/modul-conectare-db.php";
    include_once "module/modul-functii.php";

    // ajungem aici dupa ce a fost apasat butonul votare
    if($_SESSION['cartonase'] == "fotbal")
    {
        if(isset($_SESSION['id']))
        {
            $rez = mysqli_query($link, "SELECT * FROM `voturi` WHERE id_cont = {$_SESSION['id']} && categorie = 'fotbal'");
            $Max = 0;
            while($L = mysqli_fetch_assoc($rez))
            {
                if(strtotime($L['data']) > $Max)
                    $Max = strtotime($L['data']);
            }
            $data_ultimei_votari = $Max;
            $timp_curent = time() + 3600;
            $timp_trecut = $timp_curent - $data_ultimei_votari;
            // timpul trecut de la ultima votare
            if($timp_trecut > 60)
            {
                mysqli_query($link, "INSERT INTO voturi VALUES (NULL, '{$_SESSION['id']}', NOW(), 'fotbal')");
                $id_cart1 = $_POST['cart1'];
                $id_cart2 = $_POST['cart2'];
                $id_cart3 = $_POST['cart3'];
                // marim alegem nr de voturi din baza de date ale jucatorilor alesi 
                $nr = 0;
                $rez = mysqli_query($link, "SELECT * FROM clasament_fotbal ORDER BY nume ASC");
                    while($L = mysqli_fetch_assoc($rez))
                    {
                        if($nr == $id_cart1)
                        {
                            $id1 = intval($L['id']);
                            $vot_juc1 = intval($L['voturi']) + 1;
                        }
                        if($nr == $id_cart2)
                        {
                            $id2 = intval($L['id']);
                            $vot_juc2 = intval($L['voturi']) + 1;
                        }
                        if($nr == $id_cart3)
                        {
                            $id3 = intval($L['id']);
                            $vot_juc3 = intval($L['voturi']) + 1;
                        }
                        $nr++;
                    }
                // actualizăm în baza de date numărul de voturi ale jucătorilor abia votați
                $query1 = "UPDATE clasament_fotbal SET voturi = $vot_juc1 WHERE id = $id1";
                $query2 = "UPDATE clasament_fotbal SET voturi = $vot_juc2 WHERE id = $id2";
                $query3 = "UPDATE clasament_fotbal SET voturi = $vot_juc3 WHERE id = $id3";
                mysqli_query($link, $query1);
                mysqli_query($link, $query2);
                mysqli_query($link, $query3);
                MesajAdaugare('Votul tău a fost salvat!', 'success');
                header("Location: jucatori_fotbal.php");
                die();
            }
            else
            {
                $timp_ramas = 60 - $timp_trecut;
                $hours = floor($timp_ramas / 3600);
                $timp_ramas = $timp_ramas - ($hours * 3600);
                $minute = floor($timp_ramas / 60);
                $timp_ramas = $timp_ramas - ($minute * 60);
                $secunde = floor($timp_ramas % 60);
                MesajAdaugare('Ai votat deja în ultimele 24 de ore la sectiunea fobal! Trebuie să mai aștepți '.$hours.' ore '.$minute.' minute și '.$secunde.' secunde până vei putea vota din nou!', 'danger');
                header("Location: jucatori_fotbal.php");
                die();
            }
        }
        else
        {
            MesajAdaugare('Trebuie sa te autentifici pentru a putea vota!', 'danger');
            header("Location: jucatori_fotbal.php");
            die();
        }
    }



    else if($_SESSION['cartonase'] == "tenis")
    {
        if(isset($_SESSION['id']))
        {
            $rez = mysqli_query($link, "SELECT * FROM `voturi` WHERE id_cont = {$_SESSION['id']} && categorie = 'tenis'");
            $Max = 0;
            while($L = mysqli_fetch_assoc($rez))
            {
                if(strtotime($L['data']) > $Max)
                    $Max = strtotime($L['data']);
            }
            $data_ultimei_votari = $Max;
            $timp_curent = time() + 3600;
            $timp_trecut = $timp_curent - $data_ultimei_votari;
            // timpul trecut de la ultima votare
            if($timp_trecut > 60)
            {
                mysqli_query($link, "INSERT INTO voturi VALUES (NULL, '{$_SESSION['id']}', NOW(), 'tenis')");
                $id_cart1 = $_POST['cart1'];
                $id_cart2 = $_POST['cart2'];
                $id_cart3 = $_POST['cart3'];
                // marim alegem nr de voturi din baza de date ale jucatorilor alesi 
                $nr = 0;
                $rez = mysqli_query($link, "SELECT * FROM clasament_tenis ORDER BY nume ASC");
                    while($L = mysqli_fetch_assoc($rez))
                    {
                        if($nr == $id_cart1)
                        {
                            $id1 = intval($L['id']);
                            $vot_juc1 = intval($L['voturi']) + 1;
                        }
                        if($nr == $id_cart2)
                        {
                            $id2 = intval($L['id']);
                            $vot_juc2 = intval($L['voturi']) + 1;
                        }
                        if($nr == $id_cart3)
                        {
                            $id3 = intval($L['id']);
                            $vot_juc3 = intval($L['voturi']) + 1;
                        }
                        $nr++;
                    }
                // actualizăm în baza de date numărul de voturi ale jucătorilor abia votați
                $query1 = "UPDATE clasament_tenis SET voturi = $vot_juc1 WHERE id = $id1";
                $query2 = "UPDATE clasament_tenis SET voturi = $vot_juc2 WHERE id = $id2";
                $query3 = "UPDATE clasament_tenis SET voturi = $vot_juc3 WHERE id = $id3";
                mysqli_query($link, $query1);
                mysqli_query($link, $query2);
                mysqli_query($link, $query3);
                MesajAdaugare('Votul tău a fost salvat!', 'success');
                header("Location: jucatori_tenis.php");
                die();
            }
            else
            {
                $timp_ramas = 60 - $timp_trecut;
                $hours = floor($timp_ramas / 3600);
                $timp_ramas = $timp_ramas - ($hours * 3600);
                $minute = floor($timp_ramas / 60);
                $timp_ramas = $timp_ramas - ($minute * 60);
                $secunde = floor($timp_ramas % 60);
                MesajAdaugare('Ai votat deja în ultimele 24 de ore la sectiunea tenis! Trebuie să mai aștepți '.$hours.' ore '.$minute.' minute și '.$secunde.' secunde până vei putea vota din nou!', 'danger');
                header("Location: jucatori_tenis.php");
                die();
            }
        }
        else
        {
            MesajAdaugare('Trebuie sa te autentifici pentru a putea vota!', 'danger');
            header("Location: jucatori_tenis.php");
            die();
        }
    }



    else if($_SESSION['cartonase'] == "baschet")
    {
        if(isset($_SESSION['id']))
        {
            $rez = mysqli_query($link, "SELECT * FROM `voturi` WHERE id_cont = {$_SESSION['id']} && categorie = 'baschet'");
            $Max = 0;
            while($L = mysqli_fetch_assoc($rez))
            {
                if(strtotime($L['data']) > $Max)
                    $Max = strtotime($L['data']);
            }
            $data_ultimei_votari = $Max;
            $timp_curent = time() + 3600;
            $timp_trecut = $timp_curent - $data_ultimei_votari;
            // timpul trecut de la ultima votare
            if($timp_trecut > 60)
            {
                mysqli_query($link, "INSERT INTO voturi VALUES (NULL, '{$_SESSION['id']}', NOW(), 'baschet')");
                $id_cart1 = $_POST['cart1'];
                $id_cart2 = $_POST['cart2'];
                $id_cart3 = $_POST['cart3'];
                // marim alegem nr de voturi din baza de date ale jucatorilor alesi 
                $nr = 0;
                $rez = mysqli_query($link, "SELECT * FROM clasament_baschet ORDER BY nume ASC");
                    while($L = mysqli_fetch_assoc($rez))
                    {
                        if($nr == $id_cart1)
                        {
                            $id1 = intval($L['id']);
                            $vot_juc1 = intval($L['voturi']) + 1;
                        }
                        if($nr == $id_cart2)
                        {
                            $id2 = intval($L['id']);
                            $vot_juc2 = intval($L['voturi']) + 1;
                        }
                        if($nr == $id_cart3)
                        {
                            $id3 = intval($L['id']);
                            $vot_juc3 = intval($L['voturi']) + 1;
                        }
                        $nr++;
                    }
                // actualizăm în baza de date numărul de voturi ale jucătorilor abia votați
                $query1 = "UPDATE clasament_baschet SET voturi = $vot_juc1 WHERE id = $id1";
                $query2 = "UPDATE clasament_baschet SET voturi = $vot_juc2 WHERE id = $id2";
                $query3 = "UPDATE clasament_baschet SET voturi = $vot_juc3 WHERE id = $id3";
                mysqli_query($link, $query1);
                mysqli_query($link, $query2);
                mysqli_query($link, $query3);
                MesajAdaugare('Votul tău a fost salvat!', 'success');
                header("Location: jucatori_baschet.php");
                die();
            }
            else
            {
                $timp_ramas = 60 - $timp_trecut;
                $hours = floor($timp_ramas / 3600);
                $timp_ramas = $timp_ramas - ($hours * 3600);
                $minute = floor($timp_ramas / 60);
                $timp_ramas = $timp_ramas - ($minute * 60);
                $secunde = floor($timp_ramas % 60);
                MesajAdaugare('Ai votat deja în ultimele 24 de ore la sectiunea baschet! Trebuie să mai aștepți '.$hours.' ore '.$minute.' minute și '.$secunde.' secunde până vei putea vota din nou!', 'danger');
                header("Location: jucatori_baschet.php");
                die();
            }
        }
        else
        {
            MesajAdaugare('Trebuie sa te autentifici pentru a putea vota!', 'danger');
            header("Location: jucatori_baschet.php");
            die();
        }
    }

    
    else if($_SESSION['cartonase'] == "cricket")
    {
        if(isset($_SESSION['id']))
        {
            $rez = mysqli_query($link, "SELECT * FROM `voturi` WHERE id_cont = {$_SESSION['id']} && categorie = 'cricket'");
            $Max = 0;
            while($L = mysqli_fetch_assoc($rez))
            {
                if(strtotime($L['data']) > $Max)
                    $Max = strtotime($L['data']);
            }
            $data_ultimei_votari = $Max;
            $timp_curent = time() + 3600;
            $timp_trecut = $timp_curent - $data_ultimei_votari;
            // timpul trecut de la ultima votare
            if($timp_trecut > 60)
            {
                mysqli_query($link, "INSERT INTO voturi VALUES (NULL, '{$_SESSION['id']}', NOW(), 'cricket')");
                $id_cart1 = $_POST['cart1'];
                $id_cart2 = $_POST['cart2'];
                $id_cart3 = $_POST['cart3'];
                // marim alegem nr de voturi din baza de date ale jucatorilor alesi 
                $nr = 0;
                $rez = mysqli_query($link, "SELECT * FROM clasament_cricket ORDER BY nume ASC");
                    while($L = mysqli_fetch_assoc($rez))
                    {
                        if($nr == $id_cart1)
                        {
                            $id1 = intval($L['id']);
                            $vot_juc1 = intval($L['voturi']) + 1;
                        }
                        if($nr == $id_cart2)
                        {
                            $id2 = intval($L['id']);
                            $vot_juc2 = intval($L['voturi']) + 1;
                        }
                        if($nr == $id_cart3)
                        {
                            $id3 = intval($L['id']);
                            $vot_juc3 = intval($L['voturi']) + 1;
                        }
                        $nr++;
                    }
                // actualizăm în baza de date numărul de voturi ale jucătorilor abia votați
                $query1 = "UPDATE clasament_cricket SET voturi = $vot_juc1 WHERE id = $id1";
                $query2 = "UPDATE clasament_cricket SET voturi = $vot_juc2 WHERE id = $id2";
                $query3 = "UPDATE clasament_cricket SET voturi = $vot_juc3 WHERE id = $id3";
                mysqli_query($link, $query1);
                mysqli_query($link, $query2);
                mysqli_query($link, $query3);
                MesajAdaugare('Votul tău a fost salvat!', 'success');
                header("Location: jucatori_cricket.php");
                die();
            }
            else
            {
                $timp_ramas = 60 - $timp_trecut;
                $hours = floor($timp_ramas / 3600);
                $timp_ramas = $timp_ramas - ($hours * 3600);
                $minute = floor($timp_ramas / 60);
                $timp_ramas = $timp_ramas - ($minute * 60);
                $secunde = floor($timp_ramas % 60);
                MesajAdaugare('Ai votat deja în ultimele 24 de ore la sectiunea cricket! Trebuie să mai aștepți '.$hours.' ore '.$minute.' minute și '.$secunde.' secunde până vei putea vota din nou!', 'danger');
                header("Location: jucatori_cricket.php");
                die();
            }
        }
        else
        {
            MesajAdaugare('Trebuie sa te autentifici pentru a putea vota!', 'danger');
            header("Location: jucatori_cricket.php");
            die();
        }
    }
?>