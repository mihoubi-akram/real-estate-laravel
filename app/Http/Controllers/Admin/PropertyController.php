<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PropertyFormRequest;
use App\Models\Property;
use Illuminate\Foundation\Http\FormRequest;
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
    public function edit(Property $property){
        return view('admin.properties.form',[
            'property' => $property
        ]);
    }

    public function update(PropertyFormRequest $request, Property $property){
        $property->update($request->validated());
        return to_route('admin.property')->with("success" , "Le bien a bien ete modifie");
    }
}
