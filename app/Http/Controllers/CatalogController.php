<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $locale = $request->get('locale', 'ru-RU');

        $query = Product::with(['category', 'translations' => function ($query) use ($locale) {
            $query->where('locale', $locale);
        }]);

        $priceFilterFrom = null;
        $priceFilterTo = null;

        $category = null;

        if($request->has('filters')) {
            $filtersArray = explode("--", $request->filters);

            foreach ($filtersArray as $filterString) {
                $filtersArray = explode("-", $filterString);
                $filterName = $filtersArray[0];

                $isPriceFilter = $filterName === 'price';

                if($isPriceFilter) {
                    $values = explode("_", $filtersArray[1]);

                    $min = $values[0];
                    $max = $values[1];

                    if($min != 'undefined') {
                        $priceFilterFrom = $min;
                    }

                    if($max != 'undefined') {
                        $priceFilterTo = $max;
                    }
                } else {
                    $category = $filtersArray[1];
                }
            }
        }

        if ($category != null) {
            $query->whereHas('category', function ($q) use ($category) {
                $q->where('code', $category);
            });
        }

        if ($priceFilterFrom != null) {
            $query->where('price', '>=', $priceFilterFrom);
        }

        if ($priceFilterTo != null) {
            $query->where('price', '<=', $priceFilterTo);
        }

        if ($request->has('sort')) {
            $query->orderBy('price', $request->get('sort', 'asc'));
        }

        $perPage = $request->get('perPage', 12);
        $products = $query->paginate($perPage, ['*'], 'page', $request->get('page', 1));

        return response()->json($products);
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
