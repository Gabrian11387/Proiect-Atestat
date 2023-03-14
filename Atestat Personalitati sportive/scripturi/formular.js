function Afisare_Tabel(id, id_buton)
{
    const id_formulare = ["formular_fotbal", "formular_tenis", "formular_baschet", "formular_cricket"];
    const formular = document.getElementById(id);
    if(formular == null)
        document.write('Formularul nu a fost găsit!');
    else
    {
        for(var i = 0; i < 4; i ++)
        {
            document.getElementById(id_formulare[i]).style.display = "none";
            document.getElementById(i).style.color = "black";
        }
        formular.style.display = "block"; 
        document.getElementById(id_buton).style.color = "white";
    }
}