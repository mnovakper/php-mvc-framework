<?php

// za prikaz..
function show($stuff)
{
    echo "<pre>";
    print_r($stuff);
    echo "</pre>";
}

// for security purposes (inputs) - XSS
function esc($str)
{
    return htmlspecialchars($str);
}

// preusmjeravanje
function redirect($path)
{
    header("Location: " . ROOT."/".$path);
    die();
}

//used for retaining values in forms after unsuccessful submit // koristi se za zadrzavanje vrijednosti u obrascima nakon neuspjesnog slanja
function old_value($key, $default = '')
{
    if(!empty($_POST[$key]))
        return $_POST[$key];

    return $default;
}

// baca odabrani podatak (ili podatke) od korisnika (admina) prema imenu koje odaberemo
function admin($key = '')
{
    if (!empty($_SESSION['ADMIN']))
    {
        if (empty($key))
            return $_SESSION['ADMIN']; // ako nismo dali key, vrati cijeli red

        if (!empty($_SESSION['ADMIN']->$key)) // ako imamo key, provjeri postoji li i vrati vrijednost
        {
            return $_SESSION['ADMIN']->$key;
        }
    }

    return '';
}