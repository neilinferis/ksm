<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Grade;

class GradeController extends Controller
{
    private $grade;

    public function __construct(Grade $grade)
    {
        $this->grade = $grade;
    }

    public function index() {
        return view('grades.index');
    }

    public function create() {
        return view('grades.create');
    }

    public function edit() {
        return view('grades.edit');
    }

    public function show() {
        return view('grades.show');
    }

    public function delete() {
        return view('grades.delete');
    }

}
