<?php

namespace App\Http\Controllers;

use App\Models\Enrollment;
use Illuminate\Http\Request;

class EnrollmentController extends Controller
{
    private $enrollment;

    public function __construct(Enrollment $enrollment)
    {
        $this->enrollment = $enrollment;
    }

    public function index() {
        return view('enrollments.index');
    }

    public function create() {
        return view('enrollments.create');
    }

    public function edit() {
        return view('enrollments.edit');
    }

    public function show() {
        return view('enrollments.show');
    }



}
