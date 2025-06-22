<?php

namespace App\Http\Controllers;

use App\Models\Tender;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class TenderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::guard('admin')->check() || Auth::guard('manager')->check()) {
        $data = Tender::all();
        return view('dms.tenders',compact('data'));
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
            'project_name' => 'project name',
            'note' => 'note',
            'start_date' => 'start date',
            'end_date' => 'end date',
            'visit_date' => 'visit date',
            'visit_status' => 'visit status',
            'organization' => 'organization',
            'reference_number' => 'reference number',
            'check_value' => 'check value',
            'check_status' => 'check status',
            'tender_status' => 'tender status',
            'url' => 'url',
            'address' => 'address',
        ];


        $validator = Validator::make($request->all(), [
            'project_name' => 'required|string',
            'note' =>  'string',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'visit_date' => 'date',
            'visit_status' => 'required|string',
            'tender_status' => 'required|string',
            'organization' => 'required|string',
            'reference_number' => 'unique:tenders|required|string',
            'check_value' => 'string',
            'check_status' => 'string',
            'url' => 'required|string',
            'address' => 'string',
        ]);


        $validator->setAttributeNames($customNames);


        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

       $user=Auth::guard('admin')->user()
        ?? Auth::guard('manager')->user();

        $data = new Tender();
        $data->project_name = $request->project_name;
        $data->note = $request->note;
        $data->start_date = $request->start_date;
        $data->end_date = $request->end_date;
        $data->visit_date = $request->visit_date;
        $data->visit_status = $request->visit_status;
        $data->tender_status = $request->tender_status;
        $data->organization = $request->organization;
        $data->reference_number = $request->reference_number;
        $data->check_value = $request->check_value;
        $data->check_status = $request->check_status;
        $data->url = $request->url;
        $data->address = $request->address;
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
    public function show( $id)
    {
       if (Auth::guard('admin')->check()  || Auth::guard('manager')->check()) {
            $data = Tender::where('id',$id)
            ->first();
             return view('tender.showtender',compact('data'));
            }else{
                return redirect()->route('home');
            }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
          if (Auth::guard('admin')->check() || Auth::guard('manager')->check()) {
        $data = Tender::findOrFail($id);
        return response()->json($data);
    }else{
        return redirect()->route('home');
    }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
       if (Auth::guard('admin')->check()  || Auth::guard('manager')->check()) {


        try {
             $customNames = [
            'project_name' => 'project name',
            'note' => 'note',
            'start_date' => 'start date',
            'end_date' => 'end date',
            'visit_date' => 'visit date',
            'visit_status' => 'visit status',
             'tender_status' => 'tender status',
            'organization' => 'organization',
            'reference_number' => 'reference number',
            'check_value' => 'check value',
            'check_status' => 'check status',
            'url' => 'url',
            'address' => 'address',
        ];


        $validator = Validator::make($request->all(), [
            'project_name' => 'required|string',
            'note' =>  'string',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'visit_date' => 'date',
            'visit_status' => 'required|string',
            'tender_status' => 'required|string',
            'organization' => 'required|string',
            'reference_number' => 'required|string',
            'check_value' => 'string',
            'check_status' => 'string',
            'url' => 'required|string',
            'address' => 'string',
        ]);
            $validator->setAttributeNames($customNames);
            if ($validator->fails()) {
                return response()->json(['errors' => $validator->errors()], 422);
            }
       $user=Auth::guard('admin')->user()
        ?? Auth::guard('manager')->user();


         $data = Tender::findOrFail($id);
         $data->project_name = $request->project_name;
        $data->note = $request->note;
        $data->start_date = $request->start_date;
        $data->end_date = $request->end_date;
        $data->visit_date = $request->visit_date;
        $data->visit_status = $request->visit_status;
        $data->tender_status = $request->tender_status;
        $data->organization = $request->organization;
        $data->reference_number = $request->reference_number;
        $data->check_value = $request->check_value;
        $data->check_status = $request->check_status;
        $data->url = $request->url;
        $data->address = $request->address;
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
        Tender::findOrFail($id)->delete();
        return redirect()->back();
    }
}
