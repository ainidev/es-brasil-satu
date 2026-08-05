<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// --- IMPORT MODEL DARI NAMESPACE APP\MODELS ---
use App\Models\Product;
use App\Models\Partner;
use App\Models\Store;
use App\Models\AvailableStore;
use App\Models\Promo;

class AdminController extends Controller
{
    public function index()
    {
        $totalProducts        = Product::count();
        $totalPartners        = Partner::count();
        $totalStores          = Store::count();
        $totalAvailableStores = AvailableStore::count();
        $totalPromos          = Promo::count();

        return view('admin.dashboard', compact(
            'totalProducts', 
            'totalPartners', 
            'totalStores', 
            'totalAvailableStores',
            'totalPromos'
        ));
    }
}