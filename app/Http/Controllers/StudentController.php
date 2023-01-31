<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Course;
use App\Models\Members;
use App\Models\Textbook;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use function PHPUnit\Framework\returnSelf;

class StudentController extends Controller
{
    public function index()
    {
        $client = Client::find(Auth::user()->id);

        return view('clients.layouts.dashboard', compact('client'));
    }

    public function my_courses()
    {
        $client = Client::find(Auth::user()->id);
        $courses = Course::all();
        $members = Members::all();
        return view('clients.my_courses', compact('client', 'courses', 'members'));
    }

    public function full_course($id, $course_id)
    {
        $member = Members::where('client_id', Auth::user()->id)->where('course_id', $course_id)->where('status', 1)->count();
        if(Auth::user()->status==2 && $member != 0)
        {
            $textbook = Textbook::where('course_id', $course_id)->where('id', $id)->first();
        // return $textbook;

            $textbooks = Textbook::where('course_id', $course_id)->get();

            return view('clients.full_course', compact('textbook', 'textbooks', 'course_id'));
        }
        else
            return redirect()->route('home');

    }

    public function edit()
    {
        $client = Client::find(Auth::user()->id);

        return view('clients.edit', compact('client'));
    }

    public function update(Request $request, $id)
    {

        $requestData = $request->all();

        if($request->hasFile('img'))
        {
            $file = $request->file('img');
            $imageName =time() . '.' . $file->getClientOriginalExtension();
            $destinationPath = public_path('/client/img/');
            $file->move($destinationPath, $imageName);
            $requestData['img'] = $imageName;
        }

        if($request->hasFile('pdf'))
        {
            $file = $request->file('pdf');
            $fileName =time() . '.' . $file->getClientOriginalExtension();
            $destinationPath = public_path('/client/files/');
            $file->move($destinationPath, $fileName);
            $requestData['pdf'] = $fileName;
            $requestData['status'] = 1;
        }

        Client::find($id)->update($requestData);

        return redirect()->route('client.dashboard')->with('success', 'O`zgartirildi !');
    }

    public function edit_password()
    {
        $client = Client::find(Auth::user()->id);

        return view('clients.edit-password', compact('client'));
    }

    public function update_password(Request $request, $id)
    {

        $requestData = $request->all();

        if($request->password){
            $newpassword =  Hash::make($request->password);
            $requestData['password'] = $newpassword;
        }

        Client::find($id)->update($requestData);

        return redirect()->route('client.dashboard')->with('success', 'Parol O`zgartirildi !');
    }
}
