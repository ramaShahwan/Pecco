<?php

namespace App\Http\Controllers;

use App\Models\Material;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
class MaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
          if (Auth::guard('admin')->check() || Auth::guard('manager')->check()) {
        $data = Material::all();
        return view('dms.material',compact('data'));
    }else{
        return redirect()->route('home');
    }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       if (Auth::guard('admin')->check()  || Auth::guard('manager')->check()) {
             $customNames = [
            'name' => 'name',
            'url' => 'url ',

        ];

        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'url' =>  'longText',

        ]);

        $validator->setAttributeNames($customNames);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

       $user=Auth::guard('admin')->user()
        ?? Auth::guard('manager')->user();

        $data = new Material();
        $data->name = $request->name;
        $data->url = $request->url;
        $data->user_id = $user->id;
        $data->save();

        return response()->json(['message' => 'تم الاضافة بنجاح'], 200);
    }else{
        return redirect()->route('home');
     }
    }

    /**
     * Display the specified resource.
     */
    public function show(Material $material)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
         if (Auth::guard('admin')->check() || Auth::guard('manager')->check()) {
        $data = Material::findOrFail($id);
        return response()->json($data);
    }else{
        return redirect()->route('home');
    }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        if (Auth::guard('admin')->check()  || Auth::guard('manager')->check()) {


        try {
            $customNames = [
            'name' => 'name',
            'url' => 'url',
        ];

        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'url' =>  'longText',

        ]);

            $validator->setAttributeNames($customNames);
            if ($validator->fails()) {
                return response()->json(['errors' => $validator->errors()], 422);
            }
       $user=Auth::guard('admin')->user()
        ?? Auth::guard('manager')->user();


         $data = Material::findOrFail($id);
        $data->name = $request->name;
        $data->url = $request->url;
        $data->user_id = $user->id;
         $data->update();

        //  return back()->with(['message'=>'تم التعديل']);
        return response()->json(['message' => 'تم التعديل بنجاح'], 200);

              } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }else{
        return redirect()->route('home');
    }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
       Material::findOrFail($id)->delete();
        // return redirect()->back();
        return response()->json(['message' => 'تم الحذف بنجاح'], 200);

    }
}
