<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BarcodeController extends Controller
{
    public function index()
    {
        $code = '12345678910019934887482530594295240225305100';

        // echo \DNS1D::getBarcodeSVG($code, "C128", 3, 70, '#000', true);

        $barcode = \DNS1D::getBarcodePNG($code, "C128", 3, 70);
        $image = "data:image/png;base64,{$barcode}";


        $img = \Image::make($image);
        return $img->response('png');

        // dd($img);
        // ob_start();
        // $rendered_buffer = imagepng($im);
        // $buffer = ob_get_contents();
        // imagedestroy($im);
        // ob_end_clean();

        // return response()->make($img, 200, ['Content-Type' => 'image/png']);


        // echo '<img src="data:image/png;base64,'. $barcode . '" alt="barcode"   />';

        // return response()->make( "data:image/png;base64,{$barcode}" )->header("Content-Type", 'image/png');
        //  $response;

        // $file = public_path() . "/img/$image_name.png";
        // $im = imagecreatefrompng($file);
        // header('Content-Type: image/png');
        // imagePNG($im);
        // imagedestroy($im);

        // getBarcodeSVG($code, $type, $w = 2, $h = 30, $color = 'black', $showCode = true, $inline = false)
        // echo \DNS1D::getBarcodeSVG($code, "C128");
        // echo \DNS1D::getBarcodePNGPath('4445645656', 'PHARMA2T',3,33,array(255,255,0), true);
        // echo \DNS1D::getBarcodeSVG($code, 'PHARMA2T');
        // echo \DNS1D::getBarcodeHTML('4445645656', 'PHARMA2T');

        //

        // DNS1D::getBarcodePNG("OE1906-00004", "C128")
        // echo '<img src="data:image/png,' . \DNS1D::getBarcodePNG('4', 'C39+') . '" alt="barcode"   />';
        // echo \DNS1D::getBarcodeHTML('12345678910019934887482530594295240225305100', 'PHARMA2T');
        // echo \DNS2D::getBarcodePNGPath('4445645656', 'PDF417');
        // echo \DNS1D::getBarcodePNG('4445645656', 'PHARMA2T', 3, 33, [255,255,0]);

        // echo \DNS1D::getBarcodeSVG('4445645656', 'PHARMA2T',3,33,'green');
    }
}
