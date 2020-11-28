<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');        
    }

    public function index(Request $request)
    {
        $auth = Auth::user()->hasRole('super', 'manager');
        if((!$auth)){
            return view('home');
        }else{
            $keyword = $request->get('search');
            $perPage = 5;

            if (!empty($keyword)) {
                $products = Product::where('name', 'LIKE', "%$keyword%")
                ->orWhere('price', 'LIKE', "%$keyword%")
                ->latest()->orderBy('id')->paginate($perPage);
            } else {
                $products = Product::latest()->orderBy('id')->paginate($perPage);
            }

            return view('admin.products.index', ['products' => $products]);
        }
    }

    public function create()
    {
        $auth = Auth::user()->hasRole('super', 'manager');
        if((!$auth)){
            return view('home');
        }else{
            return view('admin.products.create');
        }
    }

    public function store(Request $request)
    {
        $auth = Auth::user()->hasRole('super', 'manager');
        if((!$auth)){
            return view('home');
        }else{
            
            $requestData = $request->all();
            
            Product::create($requestData);

            return redirect('admin/products')->with('flash_message', 'Product added!');
        }
    }

    public function show($id)
    {
        $auth = Auth::user()->hasRole('super', 'manager');
        if((!$auth)){
            return view('home');
        }else{
            $product = Product::findOrFail($id);

            return view('admin.products.show', compact('product'));
        }
    }

    public function edit($id)
    {
        $auth = Auth::user()->hasRole('super', 'manager');
        if((!$auth)){
            return view('home');
        }else{
            $product = Product::findOrFail($id);

            return view('admin.products.edit', compact('product'));
        }
    }

    public function update(Request $request, $id)
    {
        $auth = Auth::user()->hasRole('super', 'manager');
        if((!$auth)){
            return view('home');
        }else{
            
            $requestData = $request->all();
            
            $product = Product::findOrFail($id);
            $product->update($requestData);

            return redirect('admin/products')->with('flash_message', 'Product updated!');
        }
    }

    public function destroy($id)
    {
        $auth = Auth::user()->hasRole('super', 'manager');
        if((!$auth)){
            return view('home');
        }else{
            Product::destroy($id);

            return redirect('admin/products')->with('flash_message', 'Product deleted!');
        }
    }
}
