@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h4 class="fw-semibold mb-1">Grade Management</h4>
                <p class="text-muted mb-0">Add, view, edit and delete student grades.</p>
            </div>
            <a href="{{ route('grades.create') }}" class="btn btn-primary">+ Add Grade</a>
        </div>

        <div class="card border-0 shadow-sm rounded-3">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-light">
                        <tr class="small text-uppercase text-muted">
                            <th class="ps-4">Student</th>
                            <th>Course</th>
                            <th>Semester</th>
                            <th>Grade</th>
                            <th>Remarks</th>
                            <th class="text-end pe-4">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="ps-4 fw-medium">Dela Cruz, Juan</td>
                            <td>IT101 &middot; Intro to Programming</td>
                            <td>1st Semester, 2025-2026</td>
                            <td class="fw-bold">1.50</td>
                            <td><span class="badge rounded-pill bg-success-subtle text-success-emphasis">Passed</span></td>
                            <td class="text-end pe-4 text-nowrap">
                                <a href="{{ route('grades.show') }}" class="btn btn-sm btn-outline-secondary">View</a>
                                <a href="{{ route('grades.edit') }}" class="btn btn-sm btn-outline-primary">Edit</a>
                                <a href="{{ route('grades.delete') }}" class="btn btn-sm btn-outline-danger">Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="ps-4 fw-medium">Santos, Maria</td>
                            <td>IT102 &middot; Database Systems</td>
                            <td>1st Semester, 2025-2026</td>
                            <td class="fw-bold">1.75</td>
                            <td><span class="badge rounded-pill bg-success-subtle text-success-emphasis">Passed</span></td>
                            <td class="text-end pe-4 text-nowrap">
                                <a href="#" class="btn btn-sm btn-outline-secondary">View</a>
                                <a href="#" class="btn btn-sm btn-outline-primary">Edit</a>
                                <a href="#" class="btn btn-sm btn-outline-danger">Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="ps-4 fw-medium">Reyes, Pedro</td>
                            <td>IT103 &middot; Web Development</td>
                            <td>1st Semester, 2025-2026</td>
                            <td class="fw-bold">5.00</td>
                            <td><span class="badge rounded-pill bg-danger-subtle text-danger-emphasis">Failed</span></td>
                            <td class="text-end pe-4 text-nowrap">
                                <a href="#" class="btn btn-sm btn-outline-secondary">View</a>
                                <a href="#" class="btn btn-sm btn-outline-primary">Edit</a>
                                <a href="#" class="btn btn-sm btn-outline-danger">Delete</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection