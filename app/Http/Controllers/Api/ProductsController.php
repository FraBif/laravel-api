<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Products;

class ProductsController extends Controller
{
    public function index(){

        $products = Products::with('name', 'description' )->paginate(5);

        return response()->json(
            
            [
                'success' => true,
                'results' => $products,
            ]
        );
    }
}
