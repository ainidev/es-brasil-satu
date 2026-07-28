<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $totalProducts = Product::count(); 
        $totalPartners = 0; 

        return view('admin.dashboard', compact('totalProducts', 'totalPartners'));
    }
}