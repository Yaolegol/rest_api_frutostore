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
        $locale = $request->get('locale', 'ru');

        $query = Product::with(['category', 'translations' => function ($query) use ($locale) {
            $query->where('locale', $locale);
        }]);

        $priceFilterFrom = null;
        $priceFilterTo = null;

        $category = null;

        if($request->has('filters')) {
            $filtersArray = explode("--", $request->filters);

            foreach ($filtersArray as $filterString) {
                $filtersArray = explode("-", $request->filters);
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
                }
            }
        }

        if ($request->has('category')) {
            $query->whereHas('category', function ($q) use ($request) {
                $q->where('id', $request->category);
            });
        }

        if ($priceFilterFrom != null) {
            $query->where('price', '>=', $priceFilterFrom);
        }

        if ($priceFilterTo != null) {
            $query->where('price', '<=', $priceFilterTo);
        }

        if ($request->has('sort_by')) {
            $query->orderBy($request->sort_by, $request->get('order', 'asc'));
        }

        $products = $query->paginate(12, ['*'], 'page', $request->get('page', 1));

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
