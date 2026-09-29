@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="mb-4">
            <h4 class="fw-semibold mb-1">Delete Grade</h4>
            <p class="text-muted mb-0">Please confirm that you want to remove this grade.</p>
        </div>

        <div class="card border-0 border-start border-4 border-danger shadow-sm rounded-3">
            <div class="card-body p-4">

                <div class="alert alert-danger" role="alert">
                    This action cannot be undone.
                </div>

                <dl class="row mb-4 gy-2">
                    <dt class="col-sm-3 text-muted fw-medium">Student</dt>
                    <dd class="col-sm-9 mb-0">Dela Cruz, Juan (2025-0001)</dd>

                    <dt class="col-sm-3 text-muted fw-medium">Course</dt>
                    <dd class="col-sm-9 mb-0">IT101 &middot; Intro to Programming</dd>

                    <dt class="col-sm-3 text-muted fw-medium">Grade</dt>
                    <dd class="col-sm-9 mb-0 fw-bold">1.50</dd>

                    <dt class="col-sm-3 text-muted fw-medium">Remarks</dt>
                    <dd class="col-sm-9 mb-0"><span class="badge rounded-pill bg-success-subtle text-success-emphasis">Passed</span></dd>
                </dl>

                <form action="#" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger px-4">Yes, Delete</button>
                    <a href="{{ route('grades.index') }}" class="btn btn-light border px-4">Cancel</a>
                </form>

            </div>
        </div>

    </div>
@endsection