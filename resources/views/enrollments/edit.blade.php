@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="mb-4">
            <h4 class="fw-semibold mb-1">Edit Enrollment</h4>
            <p class="text-muted mb-0">Update the details of this enrollment.</p>
        </div>

        <div class="card border-0 shadow-sm rounded-3">
            <div class="card-body p-4">
                <form action="#" method="POST" class="row g-3">

                    <div class="col-md-6">
                        <label class="form-label fw-medium">Student</label>
                        <select class="form-select" required>
                            <option value="">Select student</option>
                            <option selected>2025-0001 &middot; Dela Cruz, Juan</option>
                            <option>2025-0002 &middot; Santos, Maria</option>
                            <option>2025-0003 &middot; Reyes, Pedro</option>
                        </select>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label fw-medium">Course</label>
                        <select class="form-select" required>
                            <option value="">Select course</option>
                            <option selected>IT101 &middot; Intro to Programming</option>
                            <option>IT102 &middot; Database Systems</option>
                            <option>IT103 &middot; Web Development</option>
                        </select>
                    </div>

                    <div class="col-md-3">
                        <label class="form-label fw-medium">Enrollment Date</label>
                        <input type="date" class="form-control" value="2025-08-01" required>
                    </div>

                    <div class="col-md-3">
                        <label class="form-label fw-medium">Semester</label>
                        <select class="form-select">
                            <option selected>1st Semester</option>
                            <option>2nd Semester</option>
                            <option>Summer</option>
                        </select>
                    </div>

                    <div class="col-md-3">
                        <label class="form-label fw-medium">School Year</label>
                        <input type="text" class="form-control" value="2025-2026" required>
                    </div>

                    <div class="col-md-3">
                        <label class="form-label fw-medium">Status</label>
                        <select class="form-select">
                            <option selected>Enrolled</option>
                            <option>Completed</option>
                            <option>Dropped</option>
                        </select>
                    </div>

                    <div class="col-12 pt-2">
                        <button type="submit" class="btn btn-primary px-4">Update</button>
                        <a href="{{ route('enrollments.index') }}" class="btn btn-light border px-4">Cancel</a>
                    </div>

                </form>
            </div>
        </div>

    </div>
@endsection