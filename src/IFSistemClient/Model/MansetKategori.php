<?php namespace IFSistemClient\Model;

class MansetKategori
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
     * @param object $kayit
     */
    public function __construct($kayit)
    {
        $this->id = $kayit->id;
        $this->adi = $kayit->adi;
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
}