<?php namespace IFSistemClient;

use Httpful\Mime;
use Httpful\Request;
use Httpful\Response;
use IFSistemClient\Cevap\Menu\MenuElemanListeCevap;
use IFSistemClient\Temel\IstekTemel;

class MenuElemanListe
{
    /**
     * @param IstekTemel $istek
     * @return MenuElemanListeCevap
     */
    public static function get($istek)
    {
        /** @var Response $sonuc */
        $sonuc = Request::post('http://localhost/dernekler.site/api/v1/menu_eleman/liste', $istek->getArray())
            ->sendsType(Mime::FORM)
            ->expectsType(Mime::JSON)
            ->send();

        // yeni bir cevap oluşturalım
        $cevap = new MenuElemanListeCevap($sonuc->body->sonuc);

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