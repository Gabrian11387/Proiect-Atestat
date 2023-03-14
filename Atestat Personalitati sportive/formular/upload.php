<?php
    session_start();
    include "module/modul-conectare-db.php";
    include "module/modul-functii.php";

// Adaugare jucator fotbal
if(isset($_SESSION['id']))
{
    if(isset($_POST['submit']) && $_POST['categorie'] == "fotbal")
{
    $nume = trim($_POST['nume']);
    $club = trim($_POST['club']);
    $nat = trim($_POST['nationalitate']);
    $varsta = trim($_POST['varsta']);
    $file = $_FILES['file_fotbal']; // contine informatii despre imaginea adaugata
    // - file - numele pe care l-am dat inputului de unde adaugam imaginea
    $fileName = $_FILES['file_fotbal']['name'];
    $fileTmpName = $_FILES['file_fotbal']['tmp_name']; // locatia temporara a imaginii
    // $file['name'] <==> $_FILES['file']['name']
    $fileSize = $file['size'];
    $fileError = $file['error'];
    $fileType = $file['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));
    // end() - ia ultimul element din array-ul $fileExt creat dupa separarea sirului cu separatorul .
    
    $allowedExt = array('jpg');
    // verificam daca extensia este din sirul de mai sus
    if(in_array($fileActualExt, $allowedExt))
    {
        if($fileError === 0)
        {
            if($fileSize < 1000000)
            {
                // Adugam prima data jucatorul in baza de date, apoi incarcam corespunzator imaginea in folder 
                $query = "INSERT INTO clasament_fotbal (id, nume, club, nationalitate, varsta, voturi, imagine) VALUES (NULL, '$nume', '$club', '$nat', '$varsta', '0', '')";
                mysqli_query($link, $query);
                $rez = mysqli_query($link, "SELECT * FROM clasament_fotbal ORDER BY id DESC");
                $L = mysqli_fetch_assoc($rez);
                $id_max = $L['id'];
                
                // numele nou al fisierului pe care în vom încărca în folderul imagini/jucatori_fotbal
                $fileNameNew = "juc_fotbal".$id_max.".".$fileActualExt;
                $fileDestination = "imagini/jucatori_fotbal/".$fileNameNew;
                // Acum incercam sa mutam fisierul din locatia lui temporara, in destinatia unde dorim sa ajunga
                // Aceasta destinatie e salvata in variabila de mai sus
                move_uploaded_file($fileTmpName, $fileDestination);

                // modificam corespunzator campul imagine al jucatorului abia adaugat
                mysqli_query($link, "UPDATE clasament_fotbal SET imagine = '$fileNameNew' WHERE id = '$id_max'");

                MesajAdaugare("Jucătorul a fost adăugat cu succes!", "success");
                header("Location: adauga_personalitate.php");
                die();
            }
            else
            {
                MesajAdaugare("Fișierul adăugat este prea mare!", "danger");
                header("Location: adauga_personalitate.php");
                die();
            }
        }
        else
        {
            MesajAdaugare("A avut loc o eroare la încărcarea imaginii!", "danger");
            header("Location: adauga_personalitate.php");
            die();
        }
    }
    else
    {
        MesajAdaugare("Extensia fisierului trebuie să fie jpg!", "danger");
        header("Location: adauga_personalitate.php");
        die();
    }

}


////////////////////////////////////////////////////////////
// Adaugare jucator tenis
if(isset($_POST['submit']) && $_POST['categorie'] == "tenis")
{
    $nume = trim($_POST['nume']);
    $nat = trim($_POST['nationalitate']);
    $varsta = trim($_POST['varsta']);
    $file = $_FILES['file_tenis']; // contine informatii despre imaginea adaugata
    // - file - numele pe care l-am dat inputului de unde adaugam imaginea
    $fileName = $_FILES['file_tenis']['name'];
    $fileTmpName = $_FILES['file_tenis']['tmp_name']; // locatia temporara a imaginii
    // $file['name'] <==> $_FILES['file']['name']
    $fileSize = $file['size'];
    $fileError = $file['error'];
    $fileType = $file['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));
    // end() - ia ultimul element din array-ul $fileExt creat dupa separarea sirului cu separatorul .
    
    $allowedExt = array('jpg');
    // verificam daca extensia este din sirul de mai sus
    if($fileActualExt == "jpg")
    {
        if($fileError === 0)
        {
            if($fileSize < 1000000)
            {
                // Adugam prima data jucatorul in baza de date, apoi incarcam corespunzator imaginea in folder 
                $query = "INSERT INTO clasament_tenis (id, nume, nationalitate, varsta, voturi, imagine) VALUES (NULL, '$nume', '$nat', '$varsta', '0', '')";
                mysqli_query($link, $query);
                $rez = mysqli_query($link, "SELECT * FROM clasament_tenis ORDER BY id DESC");
                $L = mysqli_fetch_assoc($rez);
                $id_max = $L['id'];
                
                // numele nou al fisierului pe care în vom încărca în folderul imagini/jucatori_fotbal
                $fileNameNew = "juc_tenis".$id_max.".".$fileActualExt;
                $fileDestination = "imagini/jucatori_tenis/".$fileNameNew;
                // Acum incercam sa mutam fisierul din locatia lui temporara, in destinatia unde dorim sa ajunga
                // Aceasta destinatie e salvata in variabila de mai sus
                move_uploaded_file($fileTmpName, $fileDestination);

                // modificam corespunzator campul imagine al jucatorului abia adaugat
                mysqli_query($link, "UPDATE clasament_tenis SET imagine = '$fileNameNew' WHERE id = '$id_max'");

                MesajAdaugare("Jucătorul a fost adăugat cu succes!", "success");
                header("Location: adauga_personalitate.php");
                die();
            }
            else
            {
                MesajAdaugare("Fișierul adăugat este prea mare!", "danger");
                header("Location: adauga_personalitate.php");
                die();
            }
        }
        else
        {
            MesajAdaugare("A avut loc o eroare la încărcarea imaginii!", "danger");
            header("Location: adauga_personalitate.php");
            die();
        }
    }
    else
    {
        MesajAdaugare("Extensia fisierului trebuie să fie jpg!", "danger");
        header("Location: adauga_personalitate.php");
        die();
    }
}

/////////////////////////////////////////////
// Adaugare jucator baschet
if(isset($_POST['submit']) && $_POST['categorie'] == "baschet")
{
    $nume = trim($_POST['nume']);
    $echipa = trim($_POST['echipa']);
    $nat = trim($_POST['nationalitate']);
    $varsta = trim($_POST['varsta']);
    $file = $_FILES['file_baschet']; // contine informatii despre imaginea adaugata
    // - file - numele pe care l-am dat inputului de unde adaugam imaginea
    $fileName = $_FILES['file_baschet']['name'];
    $fileTmpName = $_FILES['file_baschet']['tmp_name']; // locatia temporara a imaginii
    // $file['name'] <==> $_FILES['file']['name']
    $fileSize = $file['size'];
    $fileError = $file['error'];
    $fileType = $file['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));
    // end() - ia ultimul element din array-ul $fileExt creat dupa separarea sirului cu separatorul .
    
    $allowedExt = array('jpg');
    // verificam daca extensia este din sirul de mai sus
    if(in_array($fileActualExt, $allowedExt))
    {
        if($fileError === 0)
        {
            if($fileSize < 1000000)
            {
                // Adugam prima data jucatorul in baza de date, apoi incarcam corespunzator imaginea in folder 
                $query = "INSERT INTO clasament_baschet (id, nume, echipa, nationalitate, varsta, voturi, imagine) VALUES (NULL, '$nume', '$echipa', '$nat', '$varsta', '0', '')";
                mysqli_query($link, $query);
                $rez = mysqli_query($link, "SELECT * FROM clasament_baschet ORDER BY id DESC");
                $L = mysqli_fetch_assoc($rez);
                $id_max = $L['id'];
                
                // numele nou al fisierului pe care în vom încărca în folderul imagini/jucatori_fotbal
                $fileNameNew = "juc_baschet".$id_max.".".$fileActualExt;
                $fileDestination = "imagini/jucatori_baschet/".$fileNameNew;
                // Acum incercam sa mutam fisierul din locatia lui temporara, in destinatia unde dorim sa ajunga
                // Aceasta destinatie e salvata in variabila de mai sus
                move_uploaded_file($fileTmpName, $fileDestination);

                // modificam corespunzator campul imagine al jucatorului abia adaugat
                mysqli_query($link, "UPDATE clasament_baschet SET imagine = '$fileNameNew' WHERE id = '$id_max'");

                MesajAdaugare("Jucătorul a fost adăugat cu succes!", "success");
                header("Location: adauga_personalitate.php");
                die();
            }
            else
            {
                MesajAdaugare("Fișierul adăugat este prea mare!", "danger");
                header("Location: adauga_personalitate.php");
                die();
            }
        }
        else
        {
            MesajAdaugare("A avut loc o eroare la încărcarea imaginii!", "danger");
            header("Location: adauga_personalitate.php");
            die();
        }
    }
    else
    {
        MesajAdaugare("Extensia fisierului trebuie să fie jpg!", "danger");
        header("Location: adauga_personalitate.php");
        die();
    }

}

//////////////////////////////
// Adaugare jucator cricket
if(isset($_POST['submit']) && $_POST['categorie'] == "cricket")
{
    $nume = trim($_POST['nume']);
    $rating = trim($_POST['rating']);
    $nat = trim($_POST['nationalitate']);
    $varsta = trim($_POST['varsta']);
    $file = $_FILES['file_cricket']; // contine informatii despre imaginea adaugata
    // - file - numele pe care l-am dat inputului de unde adaugam imaginea
    $fileName = $_FILES['file_cricket']['name'];
    $fileTmpName = $_FILES['file_cricket']['tmp_name']; // locatia temporara a imaginii
    // $file['name'] <==> $_FILES['file']['name']
    $fileSize = $file['size'];
    $fileError = $file['error'];
    $fileType = $file['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));
    // end() - ia ultimul element din array-ul $fileExt creat dupa separarea sirului cu separatorul .
    
    $allowedExt = array('jpg');
    // verificam daca extensia este din sirul de mai sus
    if(in_array($fileActualExt, $allowedExt))
    {
        if($fileError === 0)
        {
            if($fileSize < 1000000)
            {
                // Adugam prima data jucatorul in baza de date, apoi incarcam corespunzator imaginea in folder 
                $query = "INSERT INTO clasament_cricket (id, nume, nationalitate, rating, varsta, voturi, imagine) VALUES (NULL, '$nume', '$nat', '$rating', '$varsta', '0', '')";
                mysqli_query($link, $query);
                $rez = mysqli_query($link, "SELECT * FROM clasament_cricket ORDER BY id DESC");
                $L = mysqli_fetch_assoc($rez);
                $id_max = $L['id'];
                
                // numele nou al fisierului pe care în vom încărca în folderul imagini/jucatori_fotbal
                $fileNameNew = "juc_cricket".$id_max.".".$fileActualExt;
                $fileDestination = "imagini/jucatori_cricket/".$fileNameNew;
                // Acum incercam sa mutam fisierul din locatia lui temporara, in destinatia unde dorim sa ajunga
                // Aceasta destinatie e salvata in variabila de mai sus
                move_uploaded_file($fileTmpName, $fileDestination);

                // modificam corespunzator campul imagine al jucatorului abia adaugat
                mysqli_query($link, "UPDATE clasament_cricket SET imagine = '$fileNameNew' WHERE id = '$id_max'");

                MesajAdaugare("Jucătorul a fost adăugat cu succes!", "success");
                header("Location: adauga_personalitate.php");
                die();
            }
            else
            {
                MesajAdaugare("Fișierul adăugat este prea mare!", "danger");
                header("Location: adauga_personalitate.php");
                die();
            }
        }
        else
        {
            MesajAdaugare("A avut loc o eroare la încărcarea imaginii!", "danger");
            header("Location: adauga_personalitate.php");
            die();
        }
    }
    else
    {
        MesajAdaugare("Extensia fisierului trebuie să fie jpg!", "danger");
        header("Location: adauga_personalitate.php");
        die();
    }

}
}
else
{
    MesajAdaugare("Trebuie să te loghezi pentru a putea adăuga noi jucători!", "danger");
    header("Location: adauga_personalitate.php");
    die();
}



