<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QrCodeController extends Controller {
    public function generate() {
        // 1. On génère un QrCode
        $qrcode = QrCode::encoding("UTF-8")
            ->size(400)
            ->color(245, 234, 62)
            ->style('square', 0.8) // ($style => "square, dot, round") et (0 < $size < 1")
            ->backgroundColor(8, 114, 145)
            ->wiFi([
            'encryption' => 'WPA', // Cryptage "WPA" ou "WEP"
            'ssid' => 'SSD LTE MiFi', // Nom du réseau WiFi
            'password' => '@31151414', // Clé de sécurité
            'hidden' => 'false' // Réseau WiFi masqué ou non
        ]);
    	
    	// 2. On envoie le QR code généré à la vue
    	return view("welcome", compact('qrcode'));
    }
}
