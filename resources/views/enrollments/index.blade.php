@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h4 class="fw-semibold mb-1">Enrollment Management</h4>
                <p class="text-muted mb-0">Enroll students in courses and manage their enrollments.</p>
            </div>
            <a href="{{ route('enrollments.create') }}" class="btn btn-primary">+ Enroll Student</a>
        </div>

        <div class="card border-0 shadow-sm rounded-3">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-light">
                        <tr class="small text-uppercase text-muted">
                            <th class="ps-4">Student</th>
                            <th>Course</th>
                            <th>Enrollment Date</th>
                            <th>Semester</th>
                            <th>School Year</th>
                            <th>Status</th>
                            <th class="text-end pe-4">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="ps-4 fw-medium">Dela Cruz, Juan</td>
                            <td>IT101 &middot; Intro to Programming</td>
                            <td>Aug 01, 2025</td>
                            <td>1st Semester</td>
                            <td>2025-2026</td>
                            <td><span class="badge rounded-pill bg-success-subtle text-success-emphasis">Enrolled</span></td>
                            <td class="text-end pe-4 text-nowrap">
                                <a href="{{ route('enrollments.show') }}" class="btn btn-sm btn-outline-secondary">View</a>
                                <a href="{{ route('enrollments.edit') }}" class="btn btn-sm btn-outline-primary">Edit</a>
                                <form action="#" method="POST" class="d-inline">
                                    <button class="btn btn-sm btn-outline-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td class="ps-4 fw-medium">Santos, Maria</td>
                            <td>IT102 &middot; Database Systems</td>
                            <td>Aug 01, 2025</td>
                            <td>1st Semester</td>
                            <td>2025-2026</td>
                            <td><span class="badge rounded-pill bg-primary-subtle text-primary-emphasis">Completed</span></td>
                            <td class="text-end pe-4 text-nowrap">
                                <a href="#" class="btn btn-sm btn-outline-secondary">View</a>
                                <a href="#" class="btn btn-sm btn-outline-primary">Edit</a>
                                <form action="#" method="POST" class="d-inline">
                                    <button class="btn btn-sm btn-outline-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td class="ps-4 fw-medium">Reyes, Pedro</td>
                            <td>IT103 &middot; Web Development</td>
                            <td>Aug 02, 2025</td>
                            <td>1st Semester</td>
                            <td>2025-2026</td>
                            <td><span class="badge rounded-pill bg-secondary-subtle text-secondary-emphasis">Dropped</span></td>
                            <td class="text-end pe-4 text-nowrap">
                                <a href="#" class="btn btn-sm btn-outline-secondary">View</a>
                                <a href="#" class="btn btn-sm btn-outline-primary">Edit</a>
                                <form action="#" method="POST" class="d-inline">
                                    <button class="btn btn-sm btn-outline-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection