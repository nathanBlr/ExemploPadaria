<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\TypesOfProducts;
use Illuminate\Http\Request;

class RotasController extends Controller
{
    public function index()
    {   
        // Fetch all types of products
        $types = TypesOfProducts::all();

        // Initialize an array to store one product per type
        $products = [];

        // Loop through each type of product
        foreach ($types as $type) {
            // Fetch the first product that matches the current type_id
            $product = Products::where('type_id', $type->id)->first();

            // If a product is found, add it to the products array
            if ($product) {
                $products[] = $product;
            }
        }

        // Return the view with types and the corresponding products
        return view('rotas.index', compact('types', 'products'));
    }

}
