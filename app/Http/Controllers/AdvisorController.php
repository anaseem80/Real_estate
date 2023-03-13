<?php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Models\PropertyDetalis;
use App\Models\PropetieType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdvisorController extends Controller
{
    public function index()
    {
        $proprtietypes = PropetieType::all();
        return view('realest.advisors', compact('proprtietypes'));
    }

    public function PurposeOfPurchase(Request $request)
    {
        $PurposeOfPurchase = $request->cate;
        return view('realest.space', compact('PurposeOfPurchase'));
    }
    public function addressProp(Request $request)
    {
        $PurposeOfPurchase = $request->cate;
        $space =  $request->space;
        return view('realest.addressProp', compact('PurposeOfPurchase', 'space'));
    }
    public function contract(Request $request)
    {
        $PurposeOfPurchase = $request->cate;
        $space =  $request->space;
        $address = $request->address;
        return view('realest.contract', compact('PurposeOfPurchase', 'space', 'address'));
    }
    public function paying(Request $request)
    {
        $PurposeOfPurchase = $request->cate;
        $space =  $request->space;
        $address = $request->address;
        $Rental = $request->Rental;
        $Rental_term = $request->Rental_term;
        if (isset($request->price)) {
            $price = $request->price;
        } else {
            $price2 = $request->price2;
        }
        return view('realest.paying', compact('PurposeOfPurchase', 'space', 'address', 'Rental_term', 'price'));
    }
    public function search(Request $request)
    {
        $PurposeOfPurchase = $request->cate;
        $space =  $request->space;
        $address = $request->address;
        $Rental = $request->Rental;
        $Rental_term = $request->Rental_term;
        $searchs = Property::where($request->all())->get();
        return view('realest.result', compact('PurposeOfPurchase','space','address','Rental','Rental_term','searchs'));
    }
}
