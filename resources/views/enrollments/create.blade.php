@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="mb-4">
            <h4 class="fw-semibold mb-1">Enroll Student</h4>
            <p class="text-muted mb-0">Select a student and a course to create a new enrollment.</p>
        </div>

        <div class="card border-0 shadow-sm rounded-3">
            <div class="card-body p-4">
                <form action="{{ route('enrollments.store') }}" method="POST" class="row g-3">
                    @csrf

                    <div class="col-md-6">
                        <label class="form-label fw-medium">Student</label>
                        <select class="form-select" name="user_id" required>
                            <option value="">Select student</option>
                            @foreach ($users as $user)
                                <option value="{{ $user->id }}">{{ $user->first_name }} {{ $user->last_name }}</option>
                            @endforeach
                        </select>
                        @error('user_id')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <label class="form-label fw-medium">Course</label>
                        <select class="form-select" name="course_id" required>
                            <option value="">Select course</option>
                            @foreach ($courses as $course)
                                <option value="{{ $course->id }}">{{ $course->name }}</option>
                            @endforeach
                        </select>
                        @error('course_id')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-3">
                        <label class="form-label fw-medium">Enrollment Date</label>
                        <input type="date" class="form-control" name="enrollment_date" required>
                        @error('enrollment_date')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-3">
                        <label class="form-label fw-medium">Semester</label>
                        <select class="form-select" name="semester">
                            <option value="1st Semester">1st Semester</option>
                            <option value="2nd Semester">2nd Semester</option>
                            <option value="Summer">Summer</option>
                        </select>
                        @error('semester')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-3">
                        <label class="form-label fw-medium">School Year</label>
                        <input type="text" class="form-control" name="school_year" placeholder="2025-2026" required>
                        @error('school_year')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-3">
                        <label class="form-label fw-medium">Status</label>
                        <select class="form-select" name="status">
                            <option value="Enrolled">Enrolled</option>
                            <option value="Completed">Completed</option>
                            <option value="Dropped">Dropped</option>
                        </select>
                        @error('status')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-12 pt-2">
                        <button type="submit" class="btn btn-primary px-4">Save</button>
                        <a href="{{ route('enrollments.index') }}" class="btn btn-light border px-4">Cancel</a>
                    </div>

                </form>
            </div>
        </div>

    </div>
@endsection
