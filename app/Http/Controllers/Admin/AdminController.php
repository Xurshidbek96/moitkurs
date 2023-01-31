<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admin = User::paginate(5);

        return view('admin.admins.index', compact('admin'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Auth::user()->id == 1)
            return view('admin.admins.create');
        else
        return redirect()->route('admins.index')->with('danger', 'Kechirasiz siz yangi admin qo`sha olmaysiz');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'phone' => ['required', 'string', 'max:255'],
            // 'img' => 'mimes:png,jpeg,jpg',
        ]);

        if($request->hasFile('img'))
        {
            $file = $request->file('img');
            $imageName =time() . '.' . $file->getClientOriginalExtension();
            $destinationPath = public_path('/admin/images/');
            $file->move($destinationPath, $imageName);
            $request['img'] = $imageName;
        }

        else
        {
            $imageName = "user.png";
        }

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'img' => $imageName,
            'phone'=>$request->phone
        ]);

        return redirect()->route('admins.index')->with('success', 'Yangi admin qo`shildi !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $admin = User::find($id);

        return view('admin.admins.show', compact('admin'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(Auth::user()->id == $id || Auth::user()->id == 1)
        {
            $admin = User::find($id);
            return view('admin.admins.edit', compact('admin'));
        }
        else
            return redirect()->route('admins.index')->with('danger', 'Kechirasiz siz bu admin ma`lumotlarini o`zgartira olmaysiz');

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

        $requestData = $request->all();

        if($request->hasFile('img'))
        {
            $file = $request->file('img');
            $imageName =time() . '.' . $file->getClientOriginalExtension();
            $destinationPath = public_path('/admin/images/');
            $file->move($destinationPath, $imageName);
            $request['img'] = $imageName;
        }

        if($request->password){

            $request->validate([
                'password' => ['required', 'confirmed', Rules\Password::defaults()],
            ]);
            
            $newpassword =  Hash::make($request->password);
            $requestData['password'] = $newpassword;
        }


        User::find($id)->update($requestData);

        return redirect()->route('admins.index')->with('success', 'O`zgartirildi !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->destroy($id);
        return redirect()->route('admins.index')->with('success', 'O`chirildi !');
    }

    public function edit_password($id)
    {
        $admin = user::find($id);
        return view('admin.admins.edit_password', compact('admin'));
    }
}
