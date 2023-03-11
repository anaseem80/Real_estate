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
        return view('realest.advisors',compact('proprtietypes'));
    }
    public function search(Request $request)
    {
        if($request->cate != null)
        {
            $propertys = Property::where('catogerie_id','=',$request->cate)->get();
            if($propertys)
            {
                $searchs = Property::where('status','1')->where('catogerie_id','=',$request->cate)->get();
            } 
            elseif($request->space != null)
            {
                $searchs = PropertyDetalis::whereHas('property')->whereRelation(['property','name',$request->cate,'property','status','1'])->where('space',$request->space)->get();
            }
            elseif($request->country != null)
            {
                $searchs = Property::where('country', 'LIKE', '%' . $request->country . '%')->where('status','1')->get();
            }
            elseif($request->type != null)
            {
                $searchs = PropertyDetalis::where('Rental_term', 'LIKE', '%' . $request->type . '%')->where('status','1')->get();
            }
            elseif($request->price != null)
            {
                $searchs = Property::where('pay', 'LIKE', '%' . $request->price . '%')->where('status','1')->get();
            }
            return view('realest.result',compact('searchs'));

           
        }
    } 
}
