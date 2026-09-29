<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    private $course;

    public function __construct(Course $course)
    {
        $this->course = $course;
    }

    public function index()
    {
        $all_courses = $this->course->all();

        return view('courses.index')->with('all_courses', $all_courses);
    }

    public function create()
    {
        return view('courses.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'course_code'   =>  'required|max:20',
            'name'          =>  'required|max:50',
            'description'   =>  'required|max:255',
            'units'         =>  'required'
        ]);

        $this->course->course_code  =   $request->course_code;
        $this->course->name         =   $request->name;
        $this->course->description  =   $request->description;
        $this->course->units        =   $request->units;
        $this->course->save();

        return redirect()->back();
    }
}
