<?php namespace IFSistemClient\Temel;

class ListeCevapTemel extends CevapTemel
{
    /**
     * @var object[]
     */
    private $kayitlar;

    /**
     * @param object $kayit
     */
    public function addKayit($kayit)
    {
        $this->kayitlar[] = $kayit;
    }

    /**
     * @return object[]
     */
    public function getKayitlar()
    {
        return $this->kayitlar;
    }
}