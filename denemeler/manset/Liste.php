<?php

require_once '../../vendor/autoload.php';

error_reporting(E_ALL);

$istek = new \IFSistemClient\Temel\IstekTemel();
$istek->setAdet(10);
$istek->setSiteId(2);
$istek->setKategoriId(1);

try {

    $cevap = \IFSistemClient\MansetListe::get($istek);

    echo '<pre>';
    print_r($cevap->getKayitlar());
    echo '</pre>';

} catch (Exception $ex) {

    die('hata: ' . $ex->getMessage());
}