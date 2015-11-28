<?php namespace IFSistemClient\Temel;

class IstekTemel
{
    /**
     * @var int
     */
    private $siteId;

    /**
     * @var string
     */
    private $kodu;

    /**
     * @var string
     */
    private $aranan;

    /**
     * @var int
     */
    private $kategoriId;

    /**
     * @var string
     */
    private $siralamaKey;

    /**
     * @var string
     */
    private $siralamaValue = 'asc';

    /**
     * @var int
     */
    private $baslangic = 0;

    /**
     * @var int
     */
    private $adet = 100;

    /**
     * @param int $baslangic
     * @param int $adet
     */
    public function __construct($baslangic = 0, $adet = 100)
    {
        $this->baslangic = 0;
        $this->adet = $adet;
    }

    /**
     * @return array
     */
    public function getArray()
    {
        $return = [];

        if ( ! empty($this->siteId))
            $return['site_id'] = $this->siteId;

        if ( ! empty($this->kodu))
            $return['kodu'] = $this->kodu;

        if ( ! empty($this->aranan))
            $return['aranan'] = $this->aranan;

        if ( ! empty($this->kategoriId))
            $return['kategori_id'] = $this->kategoriId;

        if ( ! empty($this->siralamaKey))
            $return['siralama_key'] = $this->siralamaKey;

        if ( ! empty($this->siralamaValue))
            $return['siralama_value'] = $this->siralamaValue;

        if ( ! empty($this->baslangic))
            $return['baslangic'] = $this->baslangic;

        if ( ! empty($this->adet))
            $return['adet'] = $this->adet;

        return $return;
    }

    /**
     * @return int
     */
    public function getSiteId()
    {
        return $this->siteId;
    }

    /**
     * @param int $siteId
     */
    public function setSiteId($siteId)
    {
        $this->siteId = $siteId;
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

    /**
     * @return string
     */
    public function getAranan()
    {
        return $this->aranan;
    }

    /**
     * @param string $aranan
     */
    public function setAranan($aranan)
    {
        $this->aranan = $aranan;
    }

    /**
     * @return int
     */
    public function getKategoriId()
    {
        return $this->kategoriId;
    }

    /**
     * kategori_id parametresini set eder.
     *
     * @param int $kategoriId
     */
    public function setKategoriId($kategoriId)
    {
        $this->kategoriId = (int) $kategoriId;
    }

    /**
     * @return string
     */
    public function getSiralamaKey()
    {
        return $this->siralamaKey;
    }

    /**
     * @param string $siralamaKey
     */
    public function setSiralamaKey($siralamaKey)
    {
        $this->siralamaKey = $siralamaKey;
    }

    /**
     * @return string
     */
    public function getSiralamaValue()
    {
        return $this->siralamaValue;
    }

    /**
     * @param string $siralamaValue
     */
    public function setSiralamaValue($siralamaValue)
    {
        $this->siralamaValue = $siralamaValue;
    }

    /**
     * @return int
     */
    public function getBaslangic()
    {
        return $this->baslangic;
    }

    /**
     * @param int $baslangic
     */
    public function setBaslangic($baslangic)
    {
        $this->baslangic = $baslangic;
    }

    /**
     * @return int
     */
    public function getAdet()
    {
        return $this->adet;
    }

    /**
     * @param int $adet
     */
    public function setAdet($adet)
    {
        $this->adet = $adet;
    }
}