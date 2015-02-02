<?php

namespace Captcha;

/**
 * Description of captcha
 *
 * @author 3dmaster
 */
class captcha {

    private $code = "";

    function code() {
        return $this->code;
    }

    public function create() {
        header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
        header("Cache-Control: no-store, no-cache, must-revalidate");
        header("Cache-Control: post-check = 0, pre-check = 0", false);
        header("Pragma: no-cache");
        // İçerik türünü belirtelim
        header('Content-Type: image/png');

        $kelime = $this->randomText(); //metni oluştur

        $resim = Imagecreate(140, 40) or die("resim oluşturulamadı");
        $beyaz = ImageColorAllocate($resim, 255, 255, 255);
        $gri = ImageColorAllocate($resim, 128, 128, 128);
        $bgcolor = ImageColorAllocate($resim, rand(0, 255), rand(0, 255), rand(0, 255)); //değişen arka plan rengi
        $textcolor = ImageColorAllocate($resim, 233, 14, 91);

        //bool imagefilledrectangle ( resource $resim , 
        //int $x1 , int $y1 , int $x2 , int $y2 , int $renk )
        imagefilledrectangle($resim, 0, 0, 140, 40, $bgcolor); //içi dolu dikdörtgen çizer
        //array imagettftext 
        //( resource $resim , float $boyut , float $açı , 
        //int $x , int $y , int $renk , string $yazıtipi , string $metin )
        //yazı fontu
        $font = "/fonts/din.ttf";

        // Metne gölge verelim
        imagettftext($resim, 30, 0, 11, 31, $gri, __DIR__ . $font, $kelime);
        // Metni ekleyelim
        imagettftext($resim, 30, 0, 10, 32, $beyaz, __DIR__ . $font, $kelime);

        // Resmin üzerindeki çizgileri Oluşturalım
        //bool imageline ( resource $resim , int $x1 , int $y1 , int $x2 , int $y2 , int $renk )
        for ($i = 0; $i <= 10; $i++) {
            imageline($resim, rand(0, 140), rand(0, 40), rand(0, 140), rand(0, 40), $beyaz);
        }

        imagepng($resim, NULL, 0);
        imagedestroy($resim);
    }

    private function randomText() {
        $sifre = "";
        $sifre = substr(md5(rand(0, 999999999999)), -6);
        return ($this->code = $sifre);
    }

}
