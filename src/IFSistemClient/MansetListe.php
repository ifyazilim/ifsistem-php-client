<?php namespace IFSistemClient;

use Httpful\Mime;
use Httpful\Request;
use Httpful\Response;
use IFSistemClient\Cevap\Manset\MansetListeCevap;
use IFSistemClient\Temel\IstekTemel;

class MansetListe
{
    /**
     * @param IstekTemel $istek
     * @return MansetListeCevap
     */
    public static function get($istek)
    {
        /** @var Response $sonuc */
        $sonuc = Request::post('http://localhost/dernekler.site/api/v1/manset/liste', $istek->getArray())
            ->sendsType(Mime::FORM)
            ->expectsType(Mime::JSON)
            ->send();

        // yeni bir cevap oluşturalım
        $cevap = new MansetListeCevap($sonuc->body->sonuc);

        // sonucu kontrol edelim
        if ($cevap->isSonucBasarili()) {

            // kayıtları set edelim
            $cevap->setKayitlar($sonuc->body->kayitlar);
        } else {

            // mesajı set edelim
            $cevap->setMesaj($sonuc->body->mesaj);
        }

        // cevabı geri dönelim
        return $cevap;
    }
}