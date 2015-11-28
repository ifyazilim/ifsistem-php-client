<?php namespace IFSistemClient\Temel;

interface ListeCevapTemelInterface
{
    /**
     * @param object[] $kayitlar
     */
    public function setKayitlar($kayitlar);

    /**
     * @return object[]
     */
    public function getKayitlar();
}