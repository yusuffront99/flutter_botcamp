<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Laundry;
use Illuminate\Http\Request;

class LaundryController extends Controller
{
    function readAll()
    {
        $laundries = Laundry::with(['user','shop'])->get();

        return response()->json([
            'data' => $laundries
        ], 200);
    }

    function whereUserId($id)
    {
        $laundries = Laundry::with(['shop','user'])->where('city','=', $id)->orderBy('created_at','desc')->get();
        
        if(count($laundries) > 0)
        {
            return response()->json([
                'data' => $laundries
            ], 200);
        } else {
            return response()->json([
                'message' => 'Data Not Found',
                'data' => $laundries
            ], 404);
        }

        return response()->json([
            'data' => $laundries
        ], 200);
    }
}
