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

                        @foreach ($enrollments as $enrollment)
                            <tr>
                                <td>{{ $enrollment->user->first_name }} {{ $enrollment->user->last_name }}</td>
                                <td>{{ $enrollment->course->name }}</td>
                                <td>{{ $enrollment->enrollment_date }}</td>
                                <td>{{ $enrollment->semester }}</td>
                                <td>{{ $enrollment->school_year }}</td>
                                <td><span
                                        class="badge rounded-pill bg-{{ $enrollment->status === 'Enrolled' ? 'success' : ($enrollment->status === 'Completed' ? 'primary' : 'danger') }}-subtle text-{{ $enrollment->status === 'Enrolled' ? 'success' : ($enrollment->status === 'Completed' ? 'primary' : 'danger') }}-emphasis">{{ $enrollment->status }}</span>
                                </td>
                                <td class="text-end pe-4 text-nowrap">
                                    <a href="{{ route('enrollments.show', $enrollment->id) }}"
                                        class="btn btn-sm btn-outline-secondary">View</a>
                                    <a href="{{ route('enrollments.edit', $enrollment->id) }}"
                                        class="btn btn-sm btn-outline-primary">Edit</a>
                                    <form action="{{ route('enrollments.destroy', $enrollment->id) }}" method="POST"
                                        class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-outline-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection
