<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdvisorController extends Controller
{
    public function index()
    {
        return view('realest.advisors');
    }
    public function search(Request $request)
    {
        if($request->cate != null)
        {
            $propertys = Property::where('catogerie_id','=',$request->cate)->get();
            if($propertys)
            {
                $searchs = Property::where('catogerie_id','=',$request->cate)->get();
            } 
            elseif($request->space != null)
            {
                $searchs = Property::whereHas('property_details')->whereRelation('property_details','space',$request->space)->get();
            }
            return view('realest.result',compact('searchs'));

            // $proSearchs = Property::where('catogerie_id')
        }
    } 
}
