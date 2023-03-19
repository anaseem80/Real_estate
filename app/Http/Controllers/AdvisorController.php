<?php

namespace App\Http\Controllers;

use App\Models\Catogery;
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
        $PurposeOfPurchase = $request->name;
        return view('realest.space', compact('PurposeOfPurchase'));
    }
    public function addressProp(Request $request)
    {
        $PurposeOfPurchase = $request->name;
        $space =  $request->space;
        return view('realest.addressProp', compact('PurposeOfPurchase', 'space'));
    }
    public function contract(Request $request)
    {
        $PurposeOfPurchase = $request->name;
        $space =  $request->space;
        $country = $request->country;
        return view('realest.contract', compact('PurposeOfPurchase', 'space', 'country'));
    }
    public function paying(Request $request)
    {
        $PurposeOfPurchase = $request->name;
        $space =  $request->space;
        $address = $request->address;
        $Rental = $request->Rental;
        $Rental_term = $request->Rental_term;
        $price = $request->price;
        $price2 = $request->price2;
        return view('realest.paying', compact('PurposeOfPurchase', 'space', 'address', 'Rental_term', 'price', 'price2'));
    }
    public function search(Request $request)
    {
        $PurposeOfPurchase = $request->name;
        $space =  $request->space;
        $address = $request->country;
        $Rental = $request->Rental;
        $Rental_term = $request->Rental_term;
        $search = Catogery::select('name')->where('name',$request->name)->get();
        $search2 = Property::select('picture','country','created_at')->where('country',$request->country)->get();
        $search3 = PropertyDetalis::where('Rental_term',$request->Rental_term)->where('space',$request->space,)->where('price',$request->price)->get();
        // $searchs = $search;
        $searchs = $search2;
        // $searchs = $search3;

        return view('realest.result', compact('PurposeOfPurchase','space', 'address', 'Rental', 'Rental_term', 'searchs'));
    }
}
