<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use App\Models\Basket;
use App\Models\ProductCategory;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\JsonResponse;
use Exception;

class WelcomeController extends Controller 
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index() : View
    {
        return view('welcome',[
            'products' => Product::paginate(10),
            'categories' => ProductCategory::all()
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  Basket  $basket
     * @return View
     */
    public function showBasket(Basket $basket) : View
    {
        return view('basket', [
            'baskets' => Basket::all()->where('user_id', '=', Auth::id())
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  Product  $product
     * @return View
     */
    public function show(Product $product) : View
    {
        return view('Products.item',[
            'product' => $product
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  Basket  $basket
     * @return RedirectResponse
     */
    public function addToBasket(Request $request, Basket $basket) : RedirectResponse
    {
        $basket = new Basket($request->all());
        $basketProductAmount = $request->amount;
        if (Basket::where('product_id', $request['product_id'])->where('user_id',  Auth::id())->exists()) {
            $existingRow = Basket::where('product_id', '=', $request['product_id'])->where('user_id', '=', Auth::id())->first();
            $existingRow->amount+=$request->amount;
            $existingRow->save();
        }
        else
        {
        $basket['user_id'] = Auth::id();
        $basket->save();
        }
        $amountSubstraction = Product::where('id', $request['product_id'])->first();
        $amountSubstraction->amount-=$basketProductAmount;
        $amountSubstraction->save();
        return redirect(route('index'));
    }


            /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return JsonResponse
     * @throws /Exception
     */
    public function destroy(Basket $basket) : JsonResponse
    {
        try
        {   
            $addProductAmount = Product::where('id', $basket['product_id'])->first();
            $addProductAmount->amount += $basket['amount'];
            $addProductAmount->save();
            $basket->delete();

            return response() -> json([
                'status' => 'success'
            ]);
        }
        catch(Exception $e)
        {
            return response() -> json([
                'status' => 'error',
                'message' => 'Error occured!'
            ])->setStatusCode(500);
        }
        $basket->delete();
    }

}