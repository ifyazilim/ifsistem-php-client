<?php

require_once '../../vendor/autoload.php';

error_reporting(E_ALL);

$istek = new \IFSistemClient\Temel\IstekTemel();
$istek->setSiteId(2);
$istek->setKodu('ana_menu');

try {

    $cevap = \IFSistemClient\MenuElemanListe::get($istek);

    echo '<pre>';
    print_r($cevap->getKayitlar());
    echo '</pre>';

} catch (Exception $ex) {

    die('hata: ' . $ex->getMessage());
}