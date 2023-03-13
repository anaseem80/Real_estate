<?php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Models\PropertyDetalis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        if ($request->filled('search')) {
            $search = Property::where('name', 'LIKE', '%' . $request->search . '%')->get();
            return view('realest.search', compact('search'));
        }
    }
    public function property_ajax($id)
    {
        $newproperty = DB::table('catogerys')
            ->where('proType_id', $id)->get();
        return response()->json([
            'newproperty' => $newproperty
        ]);
    }
    
}
