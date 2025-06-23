<?php

namespace App\Http\Controllers;

use App\Models\Cv;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class CvController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::guard('admin')->check() || Auth::guard('manager')->check()) {
        $data = Cv::all();
        return view('admin.cv',compact('data'));
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
            'filename' => 'file name',
            'filepath' => 'file path',
            'specialization' => 'specialization',
        ];
 
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'filename' =>  'string',
            'filepath' => 'required|string',
            'specialization' => 'required|string',
        
        ]);

        $validator->setAttributeNames($customNames);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

       $user=Auth::guard('admin')->user()
        ?? Auth::guard('manager')->user();

        $data = new Cv();
        $data->name = $request->name;
        $data->filename = $request->filename;
        $data->filepath = $request->filepath;
        $data->specialization = $request->specialization;
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
    public function show(Cv $cv)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        if (Auth::guard('admin')->check() || Auth::guard('manager')->check()) {
        $data = Cv::findOrFail($id);
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
            'filename' => 'file name',
            'filepath' => 'file path',
            'specialization' => ' specialization',
        ];

        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'filename' =>  'string',
            'filepath' => 'required|string',
            'specialization' => 'required|string',
        
        ]);

            $validator->setAttributeNames($customNames);
            if ($validator->fails()) {
                return response()->json(['errors' => $validator->errors()], 422);
            }
       $user=Auth::guard('admin')->user()
        ?? Auth::guard('manager')->user();


         $data = Cv::findOrFail($id);
        $data->name = $request->name;
        $data->filename = $request->filename;
        $data->filepath = $request->filepath;
        $data->specialization = $request->specialization;
        $data->user_id = $user->id;
         $data->update();

         return back()->with(['message'=>'تم التعديل']);
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
           Cv::findOrFail($id)->delete();
       return redirect()->back();
    }


}
