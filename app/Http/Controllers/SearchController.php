<?php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Models\PropertyDetalis;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        if ($request->filled('search')) {
            $search = Property::where('name', 'LIKE', '%' . $request->search . '%')->get();
            return view('realest.search', compact('search'));
        }
    }
}
