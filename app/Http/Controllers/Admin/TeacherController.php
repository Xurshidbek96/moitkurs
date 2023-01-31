<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use App\Models\Teacher;
use App\Models\Course;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teacher = Teacher::paginate(5);

        $course = Course::all();

        return view('admin.teachers.index', compact('teacher', 'course'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $course = \App\Models\Course::doesntHave('teacher')->get();
        return view('admin.teachers.create', compact('course'));
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

        Teacher::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'img' => $imageName,
            'phone'=>$request->phone,
            'course_id' =>$request->course_id,
            'adress' =>$request->adress,
            'level_edu' =>$request->level_edu,
            'positsion' =>$request->positsion,
        ]);

        return redirect()->route('teachers.index')->with('success', 'Yangi Mentor qo`shildi !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $teacher = Teacher::find($id);

        return view('admin.teachers.show', compact('teacher'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $teacher = Teacher::find($id);
        $course = Course::doesntHave('teacher')->get();

        return view('admin.teachers.edit', compact('teacher', 'course'));
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
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['confirmed', Rules\Password::defaults()],
            'phone' => ['required', 'string', 'max:255'],
            // 'img' => 'mimes:png,jpeg,jpg',
        ]);

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
            $newpassword =  Hash::make($request->password);
            $requestData['password'] = $newpassword;
        }


        Teacher::find($id)->update($requestData);

        return redirect()->route('teachers.index')->with('success', 'O`zgartirildi !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Teacher::find($id)->destroy($id);
        return redirect()->route('teachers.index')->with('success', 'O`chirildi !');
    }
}
