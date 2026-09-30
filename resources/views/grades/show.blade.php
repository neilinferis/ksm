@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h4 class="fw-semibold mb-1">Student Grades</h4>
                <p class="text-muted mb-0">Dela Cruz, Juan &middot; 2025-0001</p>
            </div>
            <a href="{{ route('grades.index') }}" class="btn btn-light border">Back</a>
        </div>

        <div class="card border-0 shadow-sm rounded-3">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-light">
                        <tr class="small text-uppercase text-muted">
                            <th class="ps-4">Course</th>
                            <th>Semester</th>
                            <th>Grade</th>
                            <th>Remarks</th>
                            <th class="text-end pe-4">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="ps-4 fw-medium">{{ $grade->enrollment->course->course_code }} - {{ $grade->enrollment->course->name }}</td>
                            <td>{{ $grade->enrollment->semester }} Semester, {{ $grade->enrollment->academic_year }}</td>
                            <td class="fw-bold">{{ $grade->grade }}</td>
                            <td><span class="badge rounded-pill bg-success-subtle text-success-emphasis">{{ $grade->remarks }}</span></td>
                            <td class="text-end pe-4 text-nowrap">
                                <a href="{{ route('grades.edit', $grade) }}" class="btn btn-sm btn-outline-primary">Edit</a>
                                <a href="{{ route('grades.delete', $grade) }}" class="btn btn-sm btn-outline-danger">Delete</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection