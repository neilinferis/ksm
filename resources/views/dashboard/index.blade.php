@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row g-3 mb-4">
            <div class="col-6 col-md-3">
                <a href="{{ route('user.index') }}" class="text-decoration-none">
                    <div class="card text-bg-primary shadow-sm h-100">
                        <div class="card-body">
                            <div class="small text-uppercase">Students</div>
                            <div class="fs-2 fw-bold">3</div>
                            <div class="small">View students</div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-3">
                <a href="{{ route('course.index') }}" class="text-decoration-none">
                    <div class="card text-bg-success shadow-sm h-100">
                        <div class="card-body">
                            <div class="small text-uppercase">Courses</div>
                            <div class="fs-2 fw-bold">3</div>
                            <div class="small">View courses</div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-3">
                <a href="{{ route('enrollments.index') }}" class="text-decoration-none">
                    <div class="card text-bg-warning shadow-sm h-100">
                        <div class="card-body">
                            <div class="small text-uppercase">Enrollments</div>
                            <div class="fs-2 fw-bold">3</div>
                            <div class="small">View enrollments</div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-3">
                <a href="{{ route('grades.index') }}" class="text-decoration-none">
                    <div class="card text-bg-info shadow-sm h-100">
                        <div class="card-body">
                            <div class="small text-uppercase">Grades</div>
                            <div class="fs-2 fw-bold">3</div>
                            <div class="small">View grades</div>
                        </div>
                    </div>
                </a>
            </div>
        </div>

    </div>
@endsection
