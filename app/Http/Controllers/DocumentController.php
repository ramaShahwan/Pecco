<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      if (Auth::guard('admin')->check() || Auth::guard('manager')->check()) {
        $data = Document::all();
        return view('admin.documents',compact('data'));
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
            'document_date' => 'document date',
        ];

        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'filename' =>  'string',
            'filepath' => 'required|string',
            'document_date' => 'required|date',
        
        ]);

        $validator->setAttributeNames($customNames);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

       $user=Auth::guard('admin')->user()
        ?? Auth::guard('manager')->user();

        $data = new Document();
        $data->name = $request->name;
        $data->filename = $request->filename;
        $data->filepath = $request->filepath;
        $data->document_date = $request->document_date;
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
    public function show(Document $document)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        if (Auth::guard('admin')->check() || Auth::guard('manager')->check()) {
        $data = Document::findOrFail($id);
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
            'name' => 'name',
            'filename' => 'file name',
            'filepath' => 'file path',
            'document_date' => 'document date',
        ];

        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'filename' =>  'string',
            'filepath' => 'required|string',
            'document_date' => 'required|date',
        
        ]);

            $validator->setAttributeNames($customNames);
            if ($validator->fails()) {
                return response()->json(['errors' => $validator->errors()], 422);
            }
       $user=Auth::guard('admin')->user()
        ?? Auth::guard('manager')->user();


         $data = Document::findOrFail($id);
        $data->name = $request->name;
        $data->filename = $request->filename;
        $data->filepath = $request->filepath;
        $data->document_date = $request->document_date;
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
       Document::findOrFail($id)->delete();
       return redirect()->back();
    }


     public function search(Request $request)
    {   if (Auth::guard('admin')->check()  || Auth::guard('manager')->check()) {
        $searchTerm = $request->input('search');
        $request->session()->put('search', $searchTerm);
        $data = Document::where('name', 'like', '%'.$searchTerm.'%')
        ->orderBy('name', 'Asc')
        ->get();

    return view('admin.documents', compact('data'));
}else{
    return redirect()->route('home');
}
    }
}
