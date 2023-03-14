<?php
// trebuie inlcusa in fisierele unde e inceputa sesiunea
function Login()
{
    if(isset($_SESSION['nume']))
        return $_SESSION['nume'];
    return false;
}

function Inreg()
{
    if(isset($_SESSION['inreg']) && $_SESSION['inreg'] == true)
        return true;
    return false;
}

function MesajAdaugare($text, $tip)
{
    if(! isset($_SESSION['mesaje']))
        $_SESSION['mesaje'] = [];
    $mesaj = [
        'text' => $text,
        'tip' => $tip
    ];
    $_SESSION['mesaje'][] = $mesaj;
}

function MesajAfisare()
{
    if(! isset($_SESSION['mesaje']))
        return;
    ?>
    <div class="container mt-2">
        <?php
        foreach($_SESSION['mesaje'] as $mesaj)
        {
            ?>
        <div class="container alert alert-<?=$mesaj['tip']?> alert-dismissible fade show fixed-top" style = "margin-top: 5%;">
                <?=htmlspecialchars($mesaj['text'])?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
            
    </div>
            <?php
        }
        unset($_SESSION['mesaje']);
        ?>
    </div>
    <?php
}