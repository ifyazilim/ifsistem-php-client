<?php namespace IFSistemClient\Temel;

class CevapTemel
{
    /**
     * 1 ise işlem başarılı demektir.
     * 0 ise işlem başarısız demektir. Bu durumda mesaj içeriğinde hata bilgisi yer alır.
     *
     * @var int
     */
    private $sonuc;

    /**
     * @var string
     */
    private $mesaj;

    /**
     * @param int $sonuc
     */
    public function __construct($sonuc)
    {
        $this->sonuc = $sonuc;
    }

    /**
     * Sonuç başarılı ise true değilse false.
     *
     * @return bool
     */
    public function isSonucBasarili()
    {
        return $this->sonuc == 1;
    }

    /**
     * @return string
     */
    public function getMesaj()
    {
        return $this->mesaj;
    }

    /**
     * @param string $mesaj
     */
    public function setMesaj($mesaj)
    {
        $this->mesaj = $mesaj;
    }
}