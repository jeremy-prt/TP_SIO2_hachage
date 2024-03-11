<?php
require('Model/modele.php');

function hachage()
{
    $password = 'btssioslam2';

    $hash_md5 = hash('md5', $password);
    $hash_sha1 = hash('sha1', $password);
    $hash_sha256 = hash('sha256', $password);
    $hash_sha512 = hash('sha512', $password);

    echo "<h1>HASHAGE AVEC HASH</h1>";

    echo "MD5 : " . $hash_md5 . "<br>";
    echo "Longueur : " . strlen($hash_md5) . "<br> <br>";

    echo "SHA-1 : " . $hash_sha1 . "<br>";
    echo "Longueur : " . strlen($hash_sha1) . "<br> <br>";

    echo "SHA-256 : " . $hash_sha256 . "<br>";
    echo "Longueur : " . strlen($hash_sha256) . "<br> <br>";

    echo "SHA-512 : " . $hash_sha512 . "<br>";
    echo "Longueur : " . strlen($hash_sha512) . "<br> <br>";

    $salt1 =  CRYPT($pasword, 's1');
    $salt2 =  CRYPT($password, 's2');
    $salt3 =  CRYPT($password, '_1234abcd');
    $salt4 =  CRYPT($password, '$5$12345678901234AB');

    echo "<h1>HASHAGE AVEC HASH + CRYPT</h1>";

    echo "MD5, sel de 2 caractères : " . $salt1 . "<br>";
    echo "Longueur : " . strlen($salt1) . "<br> <br>";

    echo "MD5, sel de 2 caractères : : " . $salt2 . "<br>";
    echo "Longueur : " . strlen($salt2) . "<br> <br>";

    echo "SH1, sel de 9 caractères : : " . $salt3 . "<br>";
    echo "Longueur : " . strlen($salt3) . "<br> <br>";

    echo "SHA256, sel de 16 caractères : " . $salt4 . "<br>";
    echo "Longueur : " . strlen($salt4) . "<br> <br>";

    echo "<h1>HASHAGE AVEC PASSWORD_HASH</h1>";

    $hashpsw1 = password_hash($password, PASSWORD_DEFAULT);
    $hashpsw2 = password_hash($password, PASSWORD_DEFAULT);

    echo "PASSWORD_HASH : " . $hashpsw1 . "<br>";
    echo "PASSWORD_HASH : " . $hashpsw2 . "<br>";
}





