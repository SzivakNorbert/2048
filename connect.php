<?php
function kapcsolodas($kapcsolati_szoveg, $felhasznalonev = 'nrb', $jelszo = 'SdNqsJqURCWaYLuP') {
    $pdo = new PDO($kapcsolati_szoveg, $felhasznalonev, $jelszo);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $pdo;
}
$kapcsolati_szoveg = 'mysql:host=mysql.caesar.elte.hu;dbname=nrb;';
$kapcsolat = kapcsolodas($kapcsolati_szoveg, 'nrb', 'SdNqsJqURCWaYLuP');
?>