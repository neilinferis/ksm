@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="mb-4">
            <h4 class="fw-semibold mb-1">Add Grade</h4>
            <p class="text-muted mb-0">Select an enrollment and record the student's grade.</p>
        </div>

        <div class="card border-0 shadow-sm rounded-3">
            <div class="card-body p-4">
                <form action="#" method="POST" class="row g-3">

                    <div class="col-12">
                        <label class="form-label fw-medium">Enrollment</label>
                        <select class="form-select" required>
                            <option value="">Select student and course</option>
                            <option>Dela Cruz, Juan &mdash; IT101 (1st Semester 2025-2026)</option>
                            <option>Santos, Maria &mdash; IT102 (1st Semester 2025-2026)</option>
                            <option>Reyes, Pedro &mdash; IT103 (1st Semester 2025-2026)</option>
                        </select>
                    </div>

                    <div class="col-md-4">
                        <label class="form-label fw-medium">Grade</label>
                        <input type="number" step="0.01" class="form-control" placeholder="1.75" required>
                    </div>

                    <div class="col-md-8">
                        <label class="form-label fw-medium">Remarks</label>
                        <select class="form-select">
                            <option value="">Select remarks</option>
                            <option>Passed</option>
                            <option>Failed</option>
                            <option>Incomplete</option>
                        </select>
                    </div>

                    <div class="col-12 pt-2">
                        <button type="submit" class="btn btn-primary px-4">Save</button>
                        <a href="{{ route('grades.index') }}" class="btn btn-light border px-4">Cancel</a>
                    </div>

                </form>
            </div>
        </div>

    </div>
@endsection