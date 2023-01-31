<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Client;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Textbook;
use App\Models\Teacher;
use App\Models\Members;
use App\Models\Faq;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redis;
// use App\Models\Members;

use PHPUnit\Framework\Constraint\Count;

class SiteController extends Controller
{
    public function index()
    {
        $course1 = Course::orderBy('id', 'DESC')->take(6)->get();
        $course2 = Course::orderBy('members', 'DESC')->take(8)->get();
        $category = Category::take(8)->get();
        $courses = Course::inRandomOrder()->take(5)->get();

        return view('welcome', compact('course1', 'course2', 'category', 'courses'));
    }

    public function all()
    {
        $courses = Course::paginate(9);
        $category = Category::all();
        return view('front.all', compact('courses', 'category'));
    }

    public function filter_all($id)
    {
        $courses = Course::where('category_id', $id)->paginate(9);
        $category = Category::all();
        return view('front.all', compact('courses', 'category'));
    }

    public function search(Request $request)
    {
        $search = $request->input('search');
        // return $search;

    // Search in the title and body columns from the posts table
        // $category = Category::all();
        $courses = Course::where('name', 'LIKE', "%{$search}%")
            ->orWhere('title', 'LIKE', "%{$search}%")
            ->paginate(9);

        // Return the search view with the resluts compacted
        return view('front.search', compact('courses'));
    }

    public function single_course($id)
    {
        $course = Course::where('id', $id)->first();
        // return $course;
        $textbooks = Textbook::where('course_id', $id)->get();
        $t = Textbook::where('course_id', $id)->count();
        $teacher = Teacher::where('course_id', $id)->first();

        $members = Members::where([['course_id', $id],['client_id', Auth::guard('client')->id()], ['status', 1]])->count();
        $member = Members::where([['course_id', $id],['client_id', Auth::guard('client')->id()], ['status', 0]])->count();
        // return $id;

        $courses = Course::inRandomOrder()->take(4)->get();

        return view('front.single_course', compact('course', 'textbooks', 't' ,'teacher', 'members', 'courses', 'member'));
    }

    public function complate_course($id, $course_id)
    {


        if(isset(Auth::user()->pdf) )
        {

            if(Auth::user()->status==2)
            {

                if (Members::where('client_id', $id)->where('course_id', $course_id)->count() == 0)
                {

                    Members::create([
                        'client_id' => $id,
                        'course_id'=>$course_id,
                        'status' => 1
                    ]);

                    return back()->with('success', 'Kursga a`zo bo`ldingiz !');
                }

                else
                {
                    return $course_id;
                }
            }
            elseif(Auth::user()->status==1)
                return back()->with('danger', 'Kurslarda qatnashish uchun arizangiz tasdiqlanmagan !');
            elseif(Auth::user()->status==3)
                return back()->with('danger', 'Kurslarda qatnashish uchun arizangiz rad qilingan !');
            else
                return back()->with('danger', 'Kurslarda qatnashish uchun arizangiz yubormagansiz !');

        }
        else
        {
            return redirect()->route('client.dashboard')->with('danger', 'Kursga ariza topshirish uchun ma`lumotingiz faylini yuboring ! Shundan so`ng sizning arizangiz ko`rib chiqiliadi');
        }

    }

    public function contact()
    {
        return view('front.contact');
    }

    public function faq()
    {
        $faqs = Faq::all();
        return view('front.faq', compact('faqs'));
    }

    public function artisan($name)
    {
        \Artisan::call($name);

        return "OK";
    }

    public function about()
    {
        return view('front.about');
    }

    public function workers()
    {
        return view('front.workers');
    }

    public function pages()
    {
        return view('front.pages');
    }
}
