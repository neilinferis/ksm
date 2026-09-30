<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Grade;
use App\Models\Enrollment;

class GradeController extends Controller
{
    private $grade;
    private $enrollment;

    public function __construct(Grade $grade, Enrollment $enrollment)
    {
        $this->grade = $grade;
        $this->enrollment = $enrollment;
    }

    public function index() {
        $grades = $this->grade->all();
        return view('grades.index')->with('grades', $grades);
    }

    public function store(Request $request) {
        $request->validate([
            'enrollment' => 'required|exists:enrollments,id',
            'grade' => 'required|numeric|min:1|max:5',
            'remarks' => 'required|string',
        ]);

        $this->grade->enrollment_id = $request->enrollment;
        $this->grade->grade = $request->grade;
        $this->grade->remarks = $request->remarks;
        $this->grade->save();

        return redirect()->route('grades.index');
    }

    public function create() {
        $enrollments = $this->enrollment->all();
        return view('grades.create')->with('enrollments', $enrollments);
    }

    public function edit($id) {
        $grade = $this->grade->findOrFail($id);
        $enrollments = $this->enrollment->all();
        return view('grades.edit')->with('grade', $grade)->with('enrollments', $enrollments);
    }

    public function update(Request $request, $id) {
        $request->validate([
            'enrollment' => 'required|exists:enrollments,id',
            'grade' => 'required|numeric|min:1|max:5',
            'remarks' => 'required|string',
        ]);

        $grade = $this->grade->findOrFail($id);
        $grade->enrollment_id = $request->enrollment;
        $grade->grade = $request->grade;
        $grade->remarks = $request->remarks;
        $grade->save();

        return redirect()->route('grades.index');
    }

    public function show($id) {
        $grade = $this->grade->findOrFail($id);
        return view('grades.show')->with('grade', $grade);
    }

    public function delete($id) {
        $grade = $this->grade->findOrFail($id);
        return view('grades.delete')->with('grade', $grade);
    }

    public function destroy($id) {
        $grade = $this->grade->findOrFail($id);
        $grade->delete();
        return redirect()->route('grades.index');
    }

}
