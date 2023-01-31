<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category::paginate(8);

        return view('admin.categories.index', compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.create');
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

        if($request->hasFile('img'))
        {
            $file = $request->file('img');
            $imageName =time() . '.' . $file->getClientOriginalExtension();
            $destinationPath = public_path('/images/courses/');
            $file->move($destinationPath, $imageName);
            $requestData['img'] = $imageName;
        }

        else
        {
            $requestData['img'] = 'course.png';
        }
        
        Category::create($requestData);

        return redirect()->route('categories.index')->with('success', 'Yangi kategoriya qo`shildi');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::find($id);
        return view('admin.categories.edit', compact('category'));
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
            $destinationPath = public_path('/images/courses/');
            $file->move($destinationPath, $imageName);
            $requestData['img'] = $imageName;
        }

        Category::find($id)->update($requestData);

        return redirect()->route('categories.index')->with('success', 'Ma`lumot o`zgardi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Category::find($id)->destroy($id);

        return redirect()->route('categories.index')->with('success', 'Ma`lumot o`chirildi');
    }
}
