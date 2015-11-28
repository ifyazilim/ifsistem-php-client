<?php namespace IFSistemClient\Cevap\Manset;

use IFSistemClient\Model\Manset;
use IFSistemClient\Temel\ListeCevapTemel;
use IFSistemClient\Temel\ListeCevapTemelInterface;

class MansetListeCevap extends ListeCevapTemel implements ListeCevapTemelInterface
{
    /**
     * @param object[] $kayitlar
     */
    public function setKayitlar($kayitlar)
    {
        // objeler üzerinde dönelim
        foreach ($kayitlar as $kayit) {

            // yeni kaydı oluşturalım
            parent::addKayit(new Manset($kayit));
        }
    }

    /**
     * @return Manset[]
     */
    public function getKayitlar()
    {
        return parent::getKayitlar();
    }
}