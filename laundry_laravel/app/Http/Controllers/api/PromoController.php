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
    function readLimit()
    {
        $promos = promo::orderBy('created_at', 'desc')->limit(5)->with('shop')->get();

        if(count($promos) > 0)
        {
            return response()->json([
                'data' => $promos
            ], 200);
        } else {
            return response()->json([
                'message' => 'Data Not Found',
                'data' => $promos
            ], 404);
        }

        return response()->json([
            'data' => $promos
        ], 200);
    }
}
