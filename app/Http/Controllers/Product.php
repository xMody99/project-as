<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product as ProductModel;

class Product extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $categoryId = $request->get('categoryId');

        if (!$categoryId) {
            abort(404);
        }

        return view('products.create', compact('categoryId'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new ProductModel();
        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->categoryId = $request->input('categoryId');
        $product->save();

        return redirect(route('product.show', ['product' => $product]));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = ProductModel::findOrFail($id);

        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = ProductModel::findOrFail($id);

        return view('products.edit', compact('id', 'product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = ProductModel::findOrFail($id);
        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->save();

        return redirect(route('product.show', ['product' => $product]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = ProductModel::findOrFail($id);
        $productCategory = Category::find($product->categoryId);
        $product->delete();

        if ($productCategory) {
            return redirect(route('category.show', ['category' => $productCategory]));
        }

        return redirect('/');
    }
}
