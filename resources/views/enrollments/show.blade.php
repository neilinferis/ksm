@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h4 class="fw-semibold mb-1">Enrollment Details</h4>
                <p class="text-muted mb-0">Full information about this enrollment.</p>
            </div>
            <div>
                <a href="{{ route('enrollments.edit') }}" class="btn btn-primary">Edit</a>
                <a href="{{ route('enrollments.index') }}" class="btn btn-light border">Back</a>
            </div>
        </div>

        <div class="card border-0 shadow-sm rounded-3">
            <div class="card-body p-4">
                <dl class="row mb-0 gy-3">
                    <dt class="col-sm-3 text-muted fw-medium">Student</dt>
                    <dd class="col-sm-9 mb-0">Dela Cruz, Juan (2025-0001)</dd>

                    <dt class="col-sm-3 text-muted fw-medium">Course</dt>
                    <dd class="col-sm-9 mb-0">IT101 &middot; Intro to Programming</dd>

                    <dt class="col-sm-3 text-muted fw-medium">Enrollment Date</dt>
                    <dd class="col-sm-9 mb-0">August 01, 2025</dd>

                    <dt class="col-sm-3 text-muted fw-medium">Semester</dt>
                    <dd class="col-sm-9 mb-0">1st Semester</dd>

                    <dt class="col-sm-3 text-muted fw-medium">School Year</dt>
                    <dd class="col-sm-9 mb-0">2025-2026</dd>

                    <dt class="col-sm-3 text-muted fw-medium">Status</dt>
                    <dd class="col-sm-9 mb-0"><span class="badge rounded-pill bg-success-subtle text-success-emphasis">Enrolled</span></dd>
                </dl>
            </div>
        </div>

    </div>
@endsection