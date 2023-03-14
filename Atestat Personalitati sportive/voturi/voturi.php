
<script>
    const v = [];
    let cartSelect = 0;
    for(var i = 0; i < 1000; i ++)
        v[i] = 0;
    function Adauga_vot(id)
    {
        let x = String(id);
        const cartonas = document.getElementById(x);
        if(cartSelect < 3)
        {
            // daca ajugem aici, inseamna ca putem sa mai selectam minim un cartonas
            v[id]++;
            if(v[id] % 2 == 1)
            {
                cartSelect++;
                cartonas.style.border = "4px solid lightgreen";
                var id_cart = 'cartonas' + cartSelect;
                id_cart = String(id_cart);
                document.getElementById(id_cart).value = id;
            }
            else
            {
                cartSelect--;
                cartonas.style.border = "2.8px solid white";
            }
            if(cartSelect == 3)
            {
                document.getElementById("buton_vot").style.display = "block";
            }
            else
            {
                document.getElementById("buton_vot").style.display = "none";
            }
        }
        else if(v[id] % 2 == 1) // ajungem aici dupa ce avem deja 3 cartonase selectate
        {
            v[id]++; // deselectam cartonasul
            cartSelect--; 
            cartonas.style.border = "2.8px solid white"; // îi refacem stilul inițial
            document.getElementById("buton_vot").style.display = "none";
        }
    }
</script>