<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QrcodeController extends Controller
{
    public function index()
    {
        $code = '12345678910019934887482530594295240225305100';
        echo \DNS2D::getBarcodeHTML($code, 'QRCODE');
    }
}
