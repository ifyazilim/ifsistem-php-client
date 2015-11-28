<?php namespace IFSistemClient\Cevap\Menu;

use IFSistemClient\Model\MenuEleman;
use IFSistemClient\Temel\ListeCevapTemel;
use IFSistemClient\Temel\ListeCevapTemelInterface;

class MenuElemanListeCevap extends ListeCevapTemel implements ListeCevapTemelInterface
{
    /**
     * @param object[] $kayitlar
     */
    public function setKayitlar($kayitlar)
    {
        // objeler üzerinde dönelim
        foreach ($kayitlar as $kayit) {

            // yeni kaydı oluşturalım
            parent::addKayit(new MenuEleman($kayit));
        }
    }

    /**
     * @return MenuEleman[]
     */
    public function getKayitlar()
    {
        return parent::getKayitlar();
    }
}