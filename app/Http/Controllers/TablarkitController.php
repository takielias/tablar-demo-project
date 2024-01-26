<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Tables\ProductTable;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Takielias\TablarKit\Facades\TablarKit;

class TablarkitController extends Controller
{
    //

    function input(): View
    {
        return view('tablar-kit.input');
    }

    function button(): View
    {
        return view('tablar-kit.button');
    }

    function card(): View
    {
        return view('tablar-kit.card');
    }

    function dropdown(): View
    {
        $products = Product::query()->limit(50)->pluck('product_name', 'id')->all();
        return view('tablar-kit.dropdown', compact('products'));
    }

    function datepicker(): View
    {
        return view('tablar-kit.datepicker');
    }

    function fileUpload(): View
    {
        return view('tablar-kit.fileupload');
    }

    function datatable(Request $request, ProductTable $table): View|array
    {
        if ($request->expectsJson()) {
            return $table->getData($request);
        }

        return view('tablar-kit.datatable', compact('table'));
    }

    function editor(): View
    {
        return view('tablar-kit.editor');
    }

    function itemSearch(Request $request): JsonResponse
    {
        $responseSchema = [
            'item_id' => 'id',
            'item_name' => 'product_name',
        ];

        $query = Product::query()->limit(50);

        $data = TablarKit::searchItem($query, $responseSchema);
        return response()->json($data);
    }

    function getTargetList(Request $request): JsonResponse
    {
        $products = Product::query()
            ->where('product_name', 'LIKE', '%' . $request->q . '%')
            ->limit(10)
            ->pluck('product_name', 'id')
            ->all();

        return response()->json($products);
    }

}
