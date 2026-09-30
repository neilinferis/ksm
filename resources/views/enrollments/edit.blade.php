@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="mb-4">
            <h4 class="fw-semibold mb-1">Edit Enrollment</h4>
            <p class="text-muted mb-0">Update the details of this enrollment.</p>
        </div>

        <div class="card border-0 shadow-sm rounded-3">
            <div class="card-body p-4">
               <form action="{{ route('enrollments.update', $enrollment->id) }}" method="POST" class="row g-3">
                    @csrf
                    @method('PATCH')

                    <div class="col-md-6">
                        <label class="form-label fw-medium">Student</label>
                        <select class="form-select" name="user_id" required>
                            <option value="">Select student</option>
                            @foreach ($users as $user)
                               @if ($user->id === $enrollment->user_id)
                                    <option value="{{ $user->id }}" selected>{{ $user->first_name }} {{ $user->last_name }}</option>
                               @else
                                    <option value="{{ $user->id }}">{{ $user->first_name }} {{ $user->last_name }}</option>
                               @endif
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
                               @if ($course->id === $enrollment->course_id)
                                    <option value="{{ $course->id }}" selected>{{ $course->name }}</option>
                               @else
                                    <option value="{{ $course->id }}">{{ $course->name }}</option>
                               @endif
                            @endforeach
                        </select>
                        @error('course_id')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-3">
                        <label class="form-label fw-medium">Enrollment Date</label>
                        <input type="date" class="form-control" name="enrollment_date" value="{{ old('enrollment_date', $enrollment->enrollment_date)}}" required>
                        @error('enrollment_date')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-3">
                        <label class="form-label fw-medium">Semester</label>
                        <select class="form-select" name="semester">
                           @if ($enrollment->semester === '1st Semester')
                                <option value="1st Semester" selected>1st Semester</option>
                                <option value="2nd Semester">2nd Semester</option>
                                <option value="Summer">Summer</option>
                            @elseif ($enrollment->semester === '2nd Semester')
                                <option value="1st Semester">1st Semester</option>
                                <option value="2nd Semester" selected>2nd Semester</option>
                                <option value="Summer">Summer</option>
                            @else
                                <option value="1st Semester">1st Semester</option>
                                <option value="2nd Semester">2nd Semester</option>
                                <option value="Summer" selected>Summer</option>
                            @endif
                        </select>
                        @error('semester')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-3">
                        <label class="form-label fw-medium">School Year</label>
                        <input type="text" class="form-control" name="school_year" placeholder="2025-2026" value="{{ old('school_year', $enrollment->school_year)}}" required>
                        @error('school_year')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-3">
                        <label class="form-label fw-medium">Status</label>
                        <select class="form-select" name="status">
                            @if ($enrollment->status === 'Enrolled')
                                <option value="Enrolled" selected>Enrolled</option>
                                <option value="Completed">Completed</option>
                                <option value="Dropped">Dropped</option>
                            @elseif ($enrollment->status === 'Completed')
                                <option value="Enrolled">Enrolled</option>
                                <option value="Completed" selected>Completed</option>
                                <option value="Dropped">Dropped</option>
                            @else
                                <option value="Enrolled">Enrolled</option>
                                <option value="Completed">Completed</option>
                                <option value="Dropped" selected>Dropped</option>
                            @endif
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