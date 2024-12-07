<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $locale = request()->get('locale', 'ru');

        $products = Product::with(['translations' => function ($query) use ($locale) {
            $query->where('locale', $locale);
        }])->get();

        $localizedProducts = $products->map(function ($product) {
            $translation = $product->translations->first();

            return [
                'id' => $product->id,
                'title' => $translation ? $translation->title : '',
                'description' => $translation ? $translation->description : '',
                'price' => $product->price,
                'image' => $product->image,
            ];
        });

        return response()->json($localizedProducts);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
