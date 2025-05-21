<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Helpers\PasswordGenerator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function edit_pass($id)
    {    if (Auth::guard('admin')->check() ) {
        $user = User::findOrFail($id);
        return view('changepassword',compact('user'));
    }else{
        return redirect()->route('home');
    }
    }

    public function changePassword($id)
   {  
    if (Auth::guard('admin')->check() ) {
    $user = User::findOrFail($id);

    $user->password = Hash::make($request->Password);
    $user->save();

    return redirect()->back()->with('message', "تم تعديل كلمة المرور بنجاح " );
   }else{
    return redirect()->route('home');
  }
  }


public function edit_profile($id)
  {     
    if (Auth::guard('admin')->check() || Auth::guard('manager')->check()) {
      $data = User::findOrFail($id);
      return view('profile_emp', compact('data'));
    }else{
        return redirect()->route('home');
    }
  }

    public function update_profile(Request $request,  $id)
    {     if (Auth::guard('admin')->check() || Auth::guard('manager')->check()) {
            try {
                $customNames = [
                    'full_name' => 'your full name',
                    'user_name' => 'your user name',
                    'email' => 'your email',
                    'phone' => 'your phone',
                    'address' => 'your address',
                ];

                $validator = Validator::make($request->all(), [
                    'full_name' => 'required|string|max:50',
                    'user_name' => ['required', 'string', 'max:25', 'regex:/^[a-zA-Z\s]+$/','user,' . $id],
                    'email' => ['required', 'string','email', 'max:100', 'regex:/^[a-zA-Z\s]+$/'],
                    'phone' => ['required', 'string', 'max:15'],
                    'address' => ['required', 'string', 'max:200'],
                ]);

                $validator->setAttributeNames($customNames);
               if ($validator->fails()) {
                return redirect()->back()
                    ->withErrors($validator)
                    ->withInput();
            }

            $data = User::findOrFail($id);
            $oldImageName = $data->image;

            $data->full_name = $request->full_name;
            $data->user_name = $request->user_name;
            $data->email = $request->email;
            $data->phone = $request->phone;
            $data->address = $request->address;
            $data->update();


            // edit image
            if($request->hasFile('image')){
                if ($oldImageName) {
                    File::delete(public_path('img/user/') . $oldImageName);
                }
             $newImage = $request->file('image');
             //for change image name
            $newImageName = 'image_' .  $data->id . '.' . $newImage->getClientOriginalExtension();
            $newImage->move(public_path('img/user/'), $newImageName);
            $data->image = $newImageName;
            $data->update();
     }
      return back()->with(['message'=>'تم التعديل']);
     } catch (\Exception $e) {
        return response()->json(['error' => $e->getMessage()], 500);
     }
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
