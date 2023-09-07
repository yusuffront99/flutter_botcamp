<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\promo;
use Illuminate\Http\Request;

class PromoController extends Controller
{
    function readAll()
    {
        $promos = promo::with('shop')->get();

        return response()->json([
            'data' => $promos
        ], 200);
    }
}
