<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Teacher;


class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $course = Course::paginate(5);
        $teacher = Teacher::all();

        return view('admin.courses.index', compact('course', 'teacher'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();
        return view('admin.courses.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $requestData = $request->all();

        if($request->img1)
        {
            $file = $request->file('img1');
            $imageName1 =time() . '.' . $file->getClientOriginalExtension();
            $destinationPath = public_path('/images/courses/');
            $file->move($destinationPath, $imageName1);
            $requestData['img1'] = $imageName1;
        }
        else
        {
            $requestData['img1'] = "course.png";
        }

        if($request->img2)
        {
            $file = $request->file('img2');
            $imageName2 =time() . '.' . $file->getClientOriginalExtension();
            $destinationPath = public_path('/images/courses/');
            $file->move($destinationPath, $imageName2);
            $requestData['img2'] = $imageName2;
        }

        else
        {
            $requestData['img2'] = "course.png";
        }

        Course::create($requestData);

        return redirect()->route('courses.index')->with('success', 'Yangi kurs qo`shildi !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $course = Course::find($id);

        return view('admin.courses.show', compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $course = Course::find($id);
        $category = Category::all();

        return view('admin.courses.edit', compact('course', 'category'));
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

        if($request->hasFile('img1'))
        {
            $file = $request->file('img1');
            $imageName1 =time() . '.' . $file->getClientOriginalExtension();
            $destinationPath = public_path('/images/courses/');
            $file->move($destinationPath, $imageName1);
            $requestData['img1'] = $imageName1;
        }

        if($request->hasFile('img2'))
        {
            $file = $request->file('img2');
            $imageName2 =time() . '.' . $file->getClientOriginalExtension();
            $destinationPath = public_path('/images/courses/');
            $file->move($destinationPath, $imageName2);
            $requestData['img2'] = $imageName2;
        }

        Course::find($id)->update($requestData);

        return redirect()->route('courses.index')->with('success', 'Ma`lumot o`zgartirildi !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Course::find($id)->destroy($id);
        return redirect()->route('courses.index')->with('success', 'O`chirildi !');
    }
}
