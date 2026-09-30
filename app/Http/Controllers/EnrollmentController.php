<?php

namespace App\Http\Controllers;

use App\Models\Enrollment;
use App\Models\User;
use App\Models\Course;
use Illuminate\Http\Request;


class EnrollmentController extends Controller
{
    private $enrollment;
    private $user;
    private $course;

    public function __construct(Enrollment $enrollment, User $user, Course $course)
    {
        $this->enrollment = $enrollment;
        $this->user = $user;
        $this->course = $course;
    }

    public function index() {
        $enrollments = $this->enrollment->all();
        return view('enrollments.index')->with('enrollments', $enrollments);
    }

    public function create() {
        $users = $this->user->all();
        $courses = $this->course->all();
        return view('enrollments.create')->with('users', $users)->with('courses', $courses);
    }

    public function store(Request $request) {
        $request->validate([
            'course_id' => 'required|exists:courses,id',
            'enrollment_date' => 'required|date',
            'semester' => 'required|string',
            'school_year' => 'required|string',
            'status' => 'required|string',
        ]);

        $this->enrollment->user_id = $request->user_id;
        $this->enrollment->course_id = $request->course_id;
        $this->enrollment->enrollment_date = $request->enrollment_date;
        $this->enrollment->semester = $request->semester;
        $this->enrollment->school_year = $request->school_year;
        $this->enrollment->status = $request->status;
        $this->enrollment->save();

        return redirect()->route('enrollments.index');
    }

    public function edit($id) {
        $enrollment = $this->enrollment->findOrFail($id);
        $users = $this->user->all();
        $courses = $this->course->all();
        return view('enrollments.edit')->with('enrollment', $enrollment)->with('users', $users)->with('courses', $courses);
    }

    public function update(Request $request, $id) {
        $request->validate([
            'course_id' => 'required|exists:courses,id',
            'enrollment_date' => 'required|date',
            'semester' => 'required|string',
            'school_year' => 'required|string',
            'status' => 'required|string',
        ]);

        $enrollment = $this->enrollment->findOrFail($id);

        $enrollment->user_id = $request->user_id;
        $enrollment->course_id = $request->course_id;
        $enrollment->enrollment_date = $request->enrollment_date;
        $enrollment->semester = $request->semester;
        $enrollment->school_year = $request->school_year;
        $enrollment->status = $request->status;
        $enrollment->save();

        return redirect()->route('enrollments.index');

    }

    public function show($id) {
        $enrollment = $this->enrollment->findOrFail($id);
        return view('enrollments.show')->with('enrollment', $enrollment);
    }

    public function destroy($id) {
        $enrollment = $this->enrollment->findOrFail($id);
        $enrollment->delete();
        return redirect()->back();
    }



}
