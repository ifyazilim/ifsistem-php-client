<?php namespace IFSistemClient\Model;

class MenuElemanTur
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
    private $aciklama;

    /**
     * @param object $kayit
     */
    public function __construct($kayit)
    {
        $this->id = $kayit->id;
        $this->adi = $kayit->adi;
        $this->aciklama = $kayit->aciklama;
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
    public function getAciklama()
    {
        return $this->aciklama;
    }

    /**
     * @param string $aciklama
     */
    public function setAciklama($aciklama)
    {
        $this->aciklama = $aciklama;
    }
}