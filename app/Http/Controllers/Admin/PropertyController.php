<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function index(){
        $props = Property::orderBy('created_at','desc')->paginate(5);
        return view('admin.properties.index',[
            'properties'=> $props
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('admin.properties.form',[
            'property' => new Property(),
        ]);
    }

    public function destroy(Property $property){
       
        $property->delete();
        return redirect()->route('admin.property')->with('success', 'Property deleted successfully!');
    }
}
