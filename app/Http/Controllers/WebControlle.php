<?php

namespace App\Http\Controllers;

use App\Models\Catogery;
use App\Models\Enquiry;
use App\Models\Property;
use App\Models\Report;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WebControlle extends Controller
{
    public function index()
    {
        // Query to retrieve the most countries where properties are established
        $mostCountries = DB::table('properties')
            ->select(Property::raw('count(*) as count, country'))
            ->groupBy('country')
            ->orderBy('count', 'desc')
            ->limit(4)
            ->get();
        $propertiesviews = Property::orderBy('views', 'desc')->take(10)->get();
        $newProperties = Property::orderBy('created_at', 'desc')->where('status', 1)->limit(10)->get();
        $propertiesRec = Property::where('recommended', 1)->get();
        $catogerys = Catogery::all();
        return view(
            'realest.test',
            [
                'mostCountries' => $mostCountries,
                'propertiesviews' => $propertiesviews,
                'newProperties' => $newProperties,
                'propertiesRec' => $propertiesRec->where('status', 1),
                'catogerys' =>  $catogerys

            ]
        );
    }



    public function detalisscreen($id)
    {

        $property = Property::with('property_details', 'images', 'facilities', 'user', 'catogery')->find($id);

        if (!$property) {
            return response()->json(['error' => 'Property not found'], 404);
        }
        return view('realest.detalis_view', ['property' => $property]);
    }

    public function moreproperty($country)
    {
        $property = Property::where('country', $country)->get();



        return view('realest.more_view', ['property' => $property]);
    }



    public function morepropertyCato($catogery)
    {
        $property = Property::where('catogerie_id', $catogery)->get();



        return view('realest.more_view', ['property' => $property]);
    }


    public function aboutpage()
    {

        $setting = Setting::first();


        return view('realest.about_view', ['setting' => $setting]);
    }
    public function terms()
    {




        return view('realest.terms');
    }
    public function addreport(Request $request)
    {


        $report = new Report();
        $report->username = $request->username;
        $report->userphone = $request->userphone;
        $report->useremail = $request->useremail;
        $report->description = $request->description;
        $report->property_id = $request->property_id;
        $report->save();




        session()->flash('delete', 'تم ارسال الابلاغ بنجاح');
        return back();
    }
    public function addenqueris(Request $request)
    {
        $enquiry = new Enquiry();
        $enquiry->username = $request->username;
        $enquiry->userphone = $request->userphone;
        $enquiry->useremail = $request->useremail;
        $enquiry->description = $request->description;
        $enquiry->property_id = $request->property_id;
        $enquiry->save();
        session()->flash('Add', 'تم ارسال الاستعلام بنجاح');
        return back();
    }
}
