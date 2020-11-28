<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
            $keyword = $request->get('search');
            $perPage = 5;

            if (!empty($keyword)) {
                $products = Product::where('name', 'LIKE', "%$keyword%")
                ->orderBy('id')
                ->latest()
                ->paginate($perPage);
            } else {
                $products = Product::orderBy('id')->latest()->paginate($perPage);
            }

            return view('products.index', compact('products'));
    }

    public function show($id)
    {
            $product = Product::findOrFail($id);

            return view('products.show', compact('product'));
    }
}
