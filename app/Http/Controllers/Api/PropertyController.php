<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Catogery;
use App\Models\enquiry;
use App\Models\Facility;
use App\Models\Image;
use App\Models\Property;
use App\Models\PropertyDetalis;
use App\Models\Report;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PropertyController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Query to retrieve the most countries where properties are established
        $mostCountries = DB::table('properties')
            ->select(Property::raw('count(*) as count, country'))
            ->groupBy('country')
            ->orderBy('count', 'desc')
            ->limit(4)
            ->get();

        return response()->json($mostCountries);
    }



    public function search(Request $request)
    {
        $searchTerm = $request->input('search');
        $properties = Property::where('name', 'LIKE', '%'.$searchTerm.'%')
                            ->orWhere('country', 'LIKE', '%'.$searchTerm.'%')
                            ->paginate(10);
    
        return response()->json([ 
            'status_code' => 200,
            'message' => 'Success',
            'properties' => $properties->where('status',1), 
           
    ]);
    }




    public function filter(Request $request)
     {
         $query = Property::query();
 
         // Apply filter by name
         if ($request->has('name')) {
             $query->where('name', 'like', '%' . $request->input('name') . '%');
         }
 
         // Apply filter by country
         if ($request->has('country')) {
             $query->where('country', $request->input('country'));
         }
 
         // Apply filter by status
         if ($request->has('status')) {
             $query->where('status', $request->input('status'));
         }
 
         // Apply filter by category
         if ($request->has('category_id')) {
             $query->where('category_id', $request->input('category_id'));
         }
 
         // Apply filter by rental term
         if ($request->has('rental_term')) {
             $query->whereHas('property_details', function ($q) use ($request) {
                 $q->where('rental_term', $request->input('rental_term'));
             });
         }
 
         // Apply filter by building type
         if ($request->has('building_type')) {
             $query->whereHas('property_details', function ($q) use ($request) {
                 $q->where('building_type', $request->input('building_type'));
             });
         }
 
         // Apply filter by property direction
         if ($request->has('property_direction')) {
             $query->whereHas('property_details', function ($q) use ($request) {
                 $q->where('property_direction', $request->input('property_direction'));
             });
         }
 
         // Apply filter by number of rooms
         if ($request->has('numbeer_room')) {
             $query->whereHas('property_details', function ($q) use ($request) {
                 $q->where('numbeer_room', $request->input('numbeer_room'));
             });
         }
 
         // Apply filter by number of toilets
         if ($request->has('numbeer_room')) {
             $query->whereHas('property_details', function ($q) use ($request) {
                 $q->where('numbeer_room', $request->input('numbeer_room'));
             });
         }
     // Apply filter by price range
        if ($request->has('price_min') && $request->has('price_max')) {
            $query->whereHas('property_details', function ($q) use ($request) {
                $q->whereBetween('price', [$request->input('price_min'), $request->input('price_max')]);
            });
        }
            $properties = $query->where('status',1)->get();
    
            return response()->json([ 
                'status_code' => 200,
                'message' => 'Success',
                'properties' => $properties->where('status',1), 
               
        ]);
        }
    
 
        public function settinges()
        {
            $settinge= Setting::first();
            return response()->json($settinge);
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




            return response()->json(['message' => 'Views updated successfully']);
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




            return response()->json(['message' => 'Views updated successfully']);
        }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $catogerys= Catogery::all();
        return response()->json([
             'status_code' => 200,
             'message' => 'Success',
             'catogerys'=>  $catogerys
        
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'catogerie_id' => 'required|integer',
            'price' => 'required|numeric',
            'description' => 'required|string',
            'space' => 'required|numeric',
            'numbeer_room' => 'required|integer',
            'property_direction' => 'required|string',
            'numbeer_toilet' => 'required|integer',
           // 'classification' => 'required|string',
            // 'seller_phone' => 'string',
            "Rental_term"=> 'required|string',
            'address' =>'required|string',
          //  "classification"=> "volvo",
            'images.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ],[
            'name.required' =>'يرجي ادخال اسم العقار',
            'image.required' =>'يرجي ادخال الصوره',
            'images.required' =>'يرجي ادخال الصوره',
            'country' => 'يرجي ادخال المدينه',
            'catogerie_id' => 'يرجي ادخال نوع العقار',
            'price' => 'يرجي ادخال السعر',
            'description' => 'يرجي ادخال الوصف',
            'space' => 'يرجي ادحال المساحه',
            'numbeer_room' => 'يرجي ادخال عدد الغرف',
            'property_direction' => 'يرجي ادحال الاتجاه',
            'numbeer_toilet' => 'يرجي ادخال عدد الحمامات',    
            'address' =>'يرجي ادخال العنوان',
            'Rental_term' =>'يرجي ادخال المده',
          // 'images.required' =>'يرجي ادخال الصوره',
           'space.numeric' =>'يرجي ادخال المساحه عدد وليس اي شئ اخر',
           'price.numeric' =>'يرجي ادخال السعر عدد وليس اي شئ اخر',

        ]);
        $imagessss = $request->file('images');
      
        $filename = time().'.'.$imagessss[0]->getClientOriginalExtension();
        $path = $imagessss[0]->storeAs('catogeryimage', $filename,'Taha');//اسم الفولدر /اسم الملف /disksال 

        $property = new Property(); 
        $property->name = $request->name; 
        $property->views = 0; 
        $property->country = $request->country; 
        $property->catogerie_id = $request->catogerie_id; 
        $property->user_id = Getuserid();  
        $property->picture =$path;
        if (Getusertype()=='admin') {
            $property->status =1; 
        } else {
            $property->status =0; 
        }
        
        $property->save();


        $propertyDetalis = new PropertyDetalis(); 
        $propertyDetalis->price = $request->price; 
        $propertyDetalis->description = $request->description; 
        $propertyDetalis->space = $request->space; 
      //  $propertyDetalis->numbeer_toilet = $request->name; 
        $propertyDetalis->numbeer_room = $request->numbeer_room; 
        $propertyDetalis->property_direction = $request->property_direction; 
        $propertyDetalis->numbeer_toilet = $request->numbeer_toilet; 
        $propertyDetalis->longitude = "35.89999"; 
        $propertyDetalis->latitude = "37.8888"; 
      //  $propertyDetalis->classification = $request->classification; 
        $propertyDetalis->seller_phone = $request->country; 
        $propertyDetalis->property_id = $property->id;
        $propertyDetalis->Rental_term = "1.55"; 
      //  $propertyDetalis->picture = 'catogeryimage/'.$filename;
        $propertyDetalis->building_type = 'سكني';
        $propertyDetalis->save();

        
       
        foreach($imagessss as $image) {
        $randomNumber = mt_rand();
        $filename = time().'.'.$image->getClientOriginalExtension();
        $path = $image->storeAs('catogeryimage', "$randomNumber".$filename,'Taha');
        $image = new Image(); 
        $image->image_path = $path;
        $image->property_id = $property->id;
        $image->save();
        }


        foreach ($request->future as $fut) {
            $model = new Facility();
            $model->facility = $fut;
            $model->property_id = $property->id;
            $model->save();
        }


return response('تم اضافة العقار بمجاح');
    }
    public function getMostViewedProperties() {
        $properties = Property::orderBy('views', 'desc')->take(10)->get();

        return response()->json( [            
            'status_code' => 200,
            'message' => 'Success',
            'properties' => $properties->where('status',1)],200,[],200);
       
    
    }

    public function recommendhotel() {
        $properties = Property::where('recommended',1)->get();

        return response()->json([            
        'status_code' => 200,
        'message' => 'Success',
        'properties' => $properties->where('status',1)], 200);
    
    }



    public function updateViews($id)
    {

        
        $property = Property::find($id);
        if (!$property) {
            return response()->json(['error' => 'Property not found'], 404);
        }
    
        $property->views += 1;
        $property->save();
    
        return response()->json(['message' => 'تم تحديث المشاهده بنجاح']);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $newProperties = Property::orderBy('created_at', 'desc')->where('status',1)->limit(10)->get();
        return response()->json( [          
        'status_code' => 200,
        'message' => 'Success',
        'property' => $newProperties,
        ]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showdetalis($id)
    {
      

        $property = Property::with('property_details', 'images', 'facilities', 'user','catogery')->find($id);

        if (!$property) {
            return response()->json(['error' => 'Property not found'], 404);
        }
    
        return response()->json(
        [
      
            'status_code' => 200,
            'message' => 'Success',
            'property' => $property,
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
     
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
     
    }
}
