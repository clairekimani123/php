<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

  class ProductController extends Controller
     {
         public function index()
         {
             $products = Product::all();
             return view('products.index', compact('products'));
         }

         public function create()
         {
             return view('products.create');
         }

         public function store(Request $request)
         {
             $request->validate([
                 'name' => 'required|string|max:255',
                 'description' => 'nullable|string',
                 'price' => 'required|numeric|min:0',
                 'stock' => 'required|integer|min:0',
             ]);

             Product::create($request->all());
             return redirect()->route('products.index')->with('success', 'Product created successfully.');
         }

         public function show(Product $product)
         {
             return view('products.show', compact('product'));
         }

         public function apiIndex()
         {
             return response()->json(Product::all());
         }

         public function apiStore(Request $request)
         {
             $request->validate([
                 'name' => 'required|string|max:255',
                 'description' => 'nullable|string',
                 'price' => 'required|numeric|min:0',
                 'stock' => 'required|integer|min:0',
             ]);

             $product = Product::create($request->all());
             return response()->json($product, 201);
         }

         public function apiShow(Product $product)
         {
             return response()->json($product);
         }
     }

     //ApiIndex-> helps or retunrs all the product in JSOn format(product:all())
     //Apidtore-> it validates the request and creates a new product, returning it in JSON format.
    //ApiShow-> returns a specific product in JSON format.
    //Apiadd-> it adds a product to the cartcontroller  for the aunthenicated user and reurns it inot JSON format.