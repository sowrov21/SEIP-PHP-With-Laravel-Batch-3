<?php

namespace App\Http\Controllers;

use Mpdf\Mpdf;
use App\Models\Product;
use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function productPdf(){
       $products = Product::all(); 
       $fileName = 'product.pdf';

       $html = view('backend.products.productPdf', compact('products'))->render();

       //dd($html);
       $mpdf = new \Mpdf\Mpdf();
        // default watermark angle is 45°
        // $mpdf = new \Mpdf\Mpdf(['mode' => 'c', 'watermarkAngle' => 45]);

        // $mpdf->SetDisplayMode('fullpage');

        // $mpdf->SetWatermarkText('Confidential');
        // $mpdf->watermark_font = 'DejaVuSansCondensed';
        // $mpdf->showWatermarkText = true;
     //    $mpdf->addPage("L");
        $mpdf->WriteHTML($html);
        
        // $mpdf->AddPage(); //Use to add new pdf page
        // $mpdf->SetWatermarkImage(public_path().'/assets/tiger.wmf', 1, '', array(10,10));
        // $mpdf->showWatermarkImage = true;
        // $mpdf->AddPage(); //Use to add new pdf page
        // $mpdf->SetWatermarkImage(public_path().'/assets/tiger.wmf', 0.15, 'F');
        // $mpdf->WriteHTML('<h2 style="text-align: center;">Using a Watermark Image as Background</h2>');
        // //$mpdf->WriteHTML($html);
        $mpdf->Output($fileName,'I');

    }

    public function productHtml(){
        $products = Product::all(); 
         return  view('backend.products.productHtml', compact('products'));
 
     }
}
