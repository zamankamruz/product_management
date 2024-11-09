<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $query = Product::query();

        if ($request->filled('search')) {
            $search = $request->search;
            $query->where('product_id', 'like', "%$search%")
                  ->orWhere('description', 'like', "%$search%");
        }

       if ($request->filled('sort')) {
            $sortColumn = $request->sort;
            $sortOrder = $request->sort_order ?? 'asc';
    
            
            if (in_array($sortColumn, ['name', 'price'])) {
                $query->orderBy($sortColumn, $sortOrder);
            }
        }

        $products = $query->paginate(10);
        return view('products.index', compact('products'));
    }


    public function create()
    {
        return view('products.create');
    }



    public function store(Request $request)
    {
        $validated = $request->validate([
            'product_id' => 'required|string|unique:products',
            'name' => 'required|string',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'stock' => 'nullable|integer',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $validated;

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('images', 'public');
            $data['image'] = $path;
        }

        Product::create($data);
        return redirect()->route('products.index')->with('success', 'Product created successfully.');
    }



    public function show($id)
    {

        $product = DB::table('products')->where('id', $id)->first();


        return view('products.show', compact('product'));
    }


    public function edit($id)
    {
        $product = DB::table('products')->where('id', $id)->first();
    
        return view('products.edit', compact('product'));
    }

    

    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $validated = $request->validate([
            'product_id' => 'required|string|unique:products,product_id,' . $id,
            'name' => 'required|string',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'stock' => 'nullable|integer',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $validated;

        if ($request->hasFile('image')) {
            if ($product->image) {
                Storage::disk('public')->delete($product->image);
            }
            $path = $request->file('image')->store('images', 'public');
            $data['image'] = $path;
        }

        $product->update($data);
        return redirect()->route('products.index')->with('success', 'Product updated successfully.');
    }



    public function destroy($id)
    {
        $product = DB::table('products')->where('id', $id)->first();

        if ($product && $product->image) {
            Storage::disk('public')->delete($product->image);
        }

        DB::table('products')->where('id', $id)->delete();

        return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
    }



}
