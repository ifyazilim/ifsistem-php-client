<?php namespace IFSistemClient\Model;

class Manset
{
    private $id;
    private $baslik;
    private $link;
    private $resim;

    /**
     * @var MansetKategori
     */
    private $kategori;

    /**
     * @param object $kayit
     */
    public function __construct($kayit)
    {
        $this->id = $kayit->id;
        $this->baslik = $kayit->baslik;
        $this->link = $kayit->link;
        $this->resim = $kayit->resim;

        // kategori varsa
        if (isset($kayit->kategori))
            $this->kategori = new MansetKategori($kayit->kategori);
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getBaslik()
    {
        return $this->baslik;
    }

    /**
     * @param mixed $baslik
     */
    public function setBaslik($baslik)
    {
        $this->baslik = $baslik;
    }

    /**
     * @return mixed
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * @param mixed $link
     */
    public function setLink($link)
    {
        $this->link = $link;
    }

    /**
     * @return mixed
     */
    public function getResim()
    {
        return $this->resim;
    }

    /**
     * @param mixed $resim
     */
    public function setResim($resim)
    {
        $this->resim = $resim;
    }
}