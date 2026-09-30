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
                       @foreach ($grades as $grade)
                           <tr>
                               <td class="ps-4 fw-medium">{{ $grade->enrollment->user->first_name }} {{ $grade->enrollment->user->last_name }}</td>
                               <td>{{ $grade->enrollment->course->course_code }} - {{ $grade->enrollment->course->name }}</td>
                               <td>{{ $grade->enrollment->semester }} Semester, {{ $grade->enrollment->academic_year }}</td>
                               <td class="fw-bold">{{ $grade->grade }}</td>
                               <td><span class="badge rounded-pill bg-{{ $grade->remarks === 'Passed' ? 'success' : ($grade->remarks === 'Failed' ? 'danger' : 'warning') }}-subtle text-{{ $grade->remarks === 'Passed' ? 'success' : ($grade->remarks === 'Failed' ? 'danger' : 'warning') }}-emphasis">{{ $grade->remarks }}</span></td>
                               <td class="text-end pe-4 text-nowrap">
                                   <a href="{{ route('grades.show', $grade->id) }}" class="btn btn-sm btn-outline-secondary">View</a>
                                   <a href="{{ route('grades.edit', $grade->id) }}" class="btn btn-sm btn-outline-primary">Edit</a>
                                   <a href="{{ route('grades.delete', $grade->id) }}" class="btn btn-sm btn-outline-danger">Delete</a>
                               </td>
                           </tr>
                       @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection