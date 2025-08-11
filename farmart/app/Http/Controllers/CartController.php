<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;



    class CartController extends Controller
     {
         public function index()
         {
             $carts = Cart::where('user_id', Auth::id())->with('product')->get();
             return view('cart.index', compact('carts'));
         }

         public function add(Request $request, Product $product)
         {
             $request->validate([
                 'quantity' => 'required|integer|min:1',
             ]);

             Cart::create([
                 'user_id' => Auth::id(),
                 'product_id' => $product->id,
                 'quantity' => $request->quantity,
             ]);

             return redirect()->route('cart.index')->with('success', 'Product added to cart.');
         }

         public function remove(Cart $cart)
         {
             if ($cart->user_id === Auth::id()) {
                 $cart->delete();
                 return redirect()->route('cart.index')->with('success', 'Product removed from cart.');
             }
             return redirect()->route('cart.index')->with('error', 'Unauthorized action.');
         }

         public function apiIndex()
         {
             $carts = Cart::where('user_id', Auth::id())->with('product')->get();
             return response()->json($carts);
         }

         public function apiAdd(Request $request, Product $product)
         {
             $request->validate([
                 'quantity' => 'required|integer|min:1',
             ]);

             $cart = Cart::create([
                 'user_id' => Auth::id(),
                 'product_id' => $product->id,
                 'quantity' => $request->quantity,
             ]);

             return response()->json($cart, 201);
         }

         public function apiRemove(Cart $cart)
         {
             if ($cart->user_id === Auth::id()) {
                 $cart->delete();
                 return response()->json(['message' => 'Product removed from cart']);
             }
             return response()->json(['error' => 'Unauthorized'], 403);
         }
     }