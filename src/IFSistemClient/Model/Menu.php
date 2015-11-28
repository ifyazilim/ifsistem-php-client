<?php namespace IFSistemClient\Model;

class Menu
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $adi;

    /**
     * @var string
     */
    private $kodu;

    /**
     * @param object $kayit
     */
    public function __construct($kayit)
    {
        $this->id = $kayit->id;
        $this->adi = $kayit->adi;
        $this->kodu = $kayit->kodu;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getAdi()
    {
        return $this->adi;
    }

    /**
     * @param string $adi
     */
    public function setAdi($adi)
    {
        $this->adi = $adi;
    }

    /**
     * @return string
     */
    public function getKodu()
    {
        return $this->kodu;
    }

    /**
     * @param string $kodu
     */
    public function setKodu($kodu)
    {
        $this->kodu = $kodu;
    }
}