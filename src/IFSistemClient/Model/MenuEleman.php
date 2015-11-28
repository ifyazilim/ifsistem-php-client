<?php namespace IFSistemClient\Model;

use Illuminate\Support\Collection;

class MenuEleman
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
    private $ikon;

    /**
     * @var string
     */
    private $adres;

    /**
     * @var MenuElemanTur
     */
    private $tur;

    /**
     * @var Menu
     */
    private $menu;

    /**
     * @var MenuEleman[]
     */
    private $altElemanlar;

    /**
     * @param object $kayit
     */
    public function __construct($kayit)
    {
        $this->id = $kayit->id;
        $this->adi = $kayit->adi;
        $this->ikon = $kayit->ikon;
        $this->adres = $kayit->adres;

        // tür varsa
        if (isset($kayit->tur))
            $this->tur = new MenuElemanTur($kayit->tur);

        // menü varsa
        if (isset($kayit->menu))
            $this->menu = new Menu($kayit->menu);

        // alt eleman varsa
        foreach ($kayit->alt_elemanlar as $altEleman) {

            $this->altElemanlar[] = new MenuEleman($altEleman);
        }
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getAdi()
    {
        return $this->adi;
    }

    /**
     * @return string
     */
    public function getIkon()
    {
        return $this->ikon;
    }

    /**
     * @return string
     */
    public function getAdres()
    {
        return $this->adres;
    }

    /**
     * @return MenuElemanTur
     */
    public function getTur()
    {
        return $this->tur;
    }

    /**
     * @return Menu
     */
    public function getMenu()
    {
        return $this->menu;
    }

    /**
     * @return MenuEleman[]|Collection
     */
    public function getAltElemanlar()
    {
        return $this->altElemanlar;
    }
}