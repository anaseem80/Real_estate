<?php

namespace App\Http\Controllers;

use App\Models\Catogery;
use App\Models\Paint;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaintController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = '';
        if(isset(Auth::user()->id)) {
            $id = Auth::user()->id;
        }
        else {
            $id = '';
        }
        $catogery = Catogery::all();
        return view('realest.paint',compact('id','catogery'));
    }
    public function viewPaints()
    {
        $views = Paint::whereHas('catogeries')->get();
        return view('realest.viewPaints',compact('views'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id = '';
        if(isset(Auth::user()->id))
        {
            $id = Auth::user()->id;
            $store = Paint::create([
                'user_id' => $id,
                'name' => Auth::user()->name,
                'catogerie_id' => $request->catogerie_id,
                'space' => $request->space,
                'phone' => Auth::user()->phone
            ]);
        } else 
        {
            $store = Paint::create([
                'name' => $request->name,
                'catogerie_id' => $request->catogerie_id,
                'space' => $request->space,
                'phone' => $request->phone
            ]);
        }
        session()->flash('Add', 'تم إرسال طلب التشطيب بنجاح');
        // $dataCatogery = Catogery::all();
        // return redirect('realest.property_insert_view',['catogery' => $dataCatogery]);
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Paint::find($id);
        $delete->delete();
        session()->flash('delete', 'تم حذف التشطيب بنجاح');
        return back();
    }
}
