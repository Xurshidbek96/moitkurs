<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Textbook;
use Illuminate\Support\Facades\Auth;

class TextbookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $textbook = Textbook::where('course_id', Auth::user()->course_id)->paginate(5);

        return view('teachers.textbooks.index', compact('textbook'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('teachers.textbooks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Textbook::create($request->all());

        return redirect()->route('textbooks.index')->with('success', 'Yangi mavzu qo`shildi');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $textbook = Textbook::find($id);

        return view('teachers.textbooks.edit', compact('textbook'));
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
        Textbook::find($id)->update($request->all());

        return redirect()->route('textbooks.index')->with('success', 'Mavzu O`zgartirildi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Textbook::find($id)->destroy($id);

        return redirect()->route('textbooks.index')->with('success', 'O`chirildi');
    }
}
