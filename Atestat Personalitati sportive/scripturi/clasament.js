function Afisare_Tabel(id)
{
    const id_butoane = ["tabel_fotbal", "tabel_tenis", "tabel_baschet", "tabel_cricket"];
    const tabel = document.getElementById(id);
    if(tabel == null)
        document.write('Tabelul nu a fost găsit!');
    else
    {
        for(var i = 0; i < 4; i ++)
            document.getElementById(id_butoane[i]).style.display = "none";
        tabel.style.display = "block"; 
    }
}

