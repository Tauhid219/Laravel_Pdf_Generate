<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function generatePDF()
    {
        $users = Product::get();

        $data = [
            'title' => 'Welcome to Funda of Web IT - fundaofwebit.com',
            'date' => date('m/d/Y'),
            'users' => $users
        ];

        $pdf = FacadePdf::loadView('pdf.usersPdf', $data);
        return $pdf->download('Products-list.pdf');
    }

    public function showproduct()
    {
        $data = Product::all();
        return view('product.product', compact('data'));
    }

    public function showdata()
    {
        $users = Product::get();

        $data = [
            'title' => 'Welcome to Funda of Web IT - fundaofwebit.com',
            'date' => date('m/d/Y'),
            'users' => $users
        ];
        return view('pdf.usersPdf', compact('data'));
    }
}
