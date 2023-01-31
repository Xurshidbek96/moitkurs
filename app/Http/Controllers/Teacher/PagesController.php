<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Models\Members;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Teacher;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    public function index()
    {
        // return Auth::user()->id;
        if(Auth::user()->id)
            $teacher = Teacher::find(Auth::user()->id);
        else
            $teacher = Teacher::all();

        return view('teachers.layouts.dashboard', compact('teacher'));
    }

    public function edit()
    {
        $teacher = Teacher::find(Auth::user()->id);

        return view('teachers.edit', compact('teacher'));
    }

    public function update(Request $request, $id)
    {

        $requestData = $request->all();

        if($request->hasFile('img'))
        {
            $file = $request->file('img');
            $imageName =time() . '.' . $file->getClientOriginalExtension();
            $destinationPath = public_path('/admin/images/');
            $file->move($destinationPath, $imageName);
            $requestData['img'] = $imageName;
        }


        Teacher::find($id)->update($requestData);

        return redirect()->route('teacher.dashboard')->with('success', 'O`zgartirildi !');
    }

    public function edit_password()
    {
        $teacher = Teacher::find(Auth::user()->id);

        return view('teachers.edit-password', compact('teacher'));
    }

    public function update_password(Request $request, $id)
    {

        $requestData = $request->all();

        if($request->password){
            $newpassword =  Hash::make($request->password);
            $requestData['password'] = $newpassword;
        }

        Teacher::find($id)->update($requestData);

        return redirect()->route('teacher.dashboard')->with('success', 'Parol O`zgartirildi !');
    }

    public function members()
    {
        
        $member = Members::where('course_id', Auth::user()->course->id)->where('status', 1)->count();

        if ($member != 0)
            $members = Members::where('course_id', Auth::user()->course->id)->where('status', 1)->paginate(10);
        else
            $members = [];

        return view('teachers.clients.index', compact('members'));
    }

    public function show_members($id)
    {
        $member = Members::find($id);
        return view('teachers.clients.edit', compact('member'));
    }

}
