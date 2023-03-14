<?php
session_start();
include_once "module/modul-functii.php";
unset($_SESSION['id']);
unset($_SESSION['nume']);
unset($_SESSION['inreg']);
MesajAdaugare('V-ați deconectat cu succes!', 'success');
header('Location: index.php');
die();
