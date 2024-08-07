<?php

namespace App\Http\Controllers;

use App\Services\ProductService;
use Illuminate\Http\Request;
use Auth;
use App\Services\ProductCategoryService;
use Maatwebsite\Excel\Facades\Excel;
use App\Services\ExportDataService;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = ProductService::products();

        return view('admin.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = ProductCategoryService::categories();

        return view('admin.product.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255', 'unique:products'],
            'price' => ['required', 'string', 'max:12'],
            'image' => ['image', 'mimes:jpg,png,jpeg,gif'],
            'digital_asset' => ['file:zip', 'mimes:zip', ],
            'product_category_id' => ['required', 'int'],
        ]);

        if(Auth::check())
        {
            $validated['user_id'] = Auth::id();
        }

        $product = ProductService::store($validated);

        session()->flash('success', 'Your product has been stored.');

        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($slug)
    {
        $product = ProductService::searchBySlug($slug);

        return view('admin.product.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($slug)
    {
        $product = ProductService::searchBySlug($slug);

        $categories = ProductCategoryService::categories();

        return view('admin.product.edit', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $slug)
    {
        $validated = $request->validate([
            'name' => ['string'],
            'image' => ['mimes:jpg,jpeg,png,gif,svg'],
            'product_category_id' => ['required'],
            'price' => ['string'],
            'digital_asset' => ['mimes:jpg,jpeg,png,gif,svg,zip,rar'],
            'description' => ['string'],
        ]);

        $product = ProductService::update($validated, $slug);

        return redirect()->route('admin.product.show', $slug);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }

    /**
     * Export products in xlsx
     */
    public function xlsx()
    {
        $file = ExportDataService::productsXlsx();

        return $file;
    }

    /**
     * Export products in csv
     */
    public function csv(Request $request)
    {
        $file = ExportDataService::productsCsv();

        return $file;
    }

    /**
     *  update a product's more_images
     */
    public function updateMoreImages(Request $request, $id)
    {
        $validated = $request->validate([
            'more_images.*' => ['mimes:jpg,jpeg,png,gif,csv'],
        ]);

        $product = ProductService::updateMoreImages($validated, $id);

        session()->flash('success', 'More images uploaded.');

        return back();
    }

    /**
     *  update product description
     */
    public function updateDescription(Request $request, $id)
    {
        
        $validated = $request->validate([
            'description' => ['string', 'max:500'],
        ]);

        $product = ProductService::updateDescription($validated, $id);

        session()->flash('success', 'Produc description updated');

        return back();
    }

    /**
     *  update product color
     */
    public function updateColor(Request $request, $id)
    {
        
        $validated = $request->validate([
            'color' => ['string', 'max:500'],
        ]);

        $product = ProductService::updateColor($validated, $id);

        session()->flash('success', 'Produc description updated');

        return back();
    }

    /**
     *  update product color
     */
    public function updateMaterial(Request $request, $id)
    {
        $validated = $request->validate([
            'material' => ['string', 'max:500'],
        ]);

        $product = ProductService::updateMaterial($validated, $id);

        session()->flash('success', 'Produc description updated');

        return back();
    }
}
