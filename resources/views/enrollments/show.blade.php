@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h4 class="fw-semibold mb-1">Enrollment Details</h4>
                <p class="text-muted mb-0">Full information about this enrollment.</p>
            </div>
            <div>
                <a href="{{ route('enrollments.edit', $enrollment->id) }}" class="btn btn-primary">Edit</a>
                <a href="{{ route('enrollments.index') }}" class="btn btn-light border">Back</a>
            </div>
        </div>

        <div class="card border-0 shadow-sm rounded-3">
            <div class="card-body p-4">
                <p>{{ $enrollment->user->first_name }} {{ $enrollment->user->last_name }}</p>
                <p>{{ $enrollment->course->name }}</p>
                <p>{{ $enrollment->enrollment_date }}</p>
                <p>{{ $enrollment->semester }}</p>
                <p>{{ $enrollment->school_year }}</p>
                <p><span class="badge rounded-pill bg-{{ $enrollment->status === 'Enrolled' ? 'success' : ($enrollment->status === 'Completed' ? 'primary' : 'danger') }}-subtle text-{{ $enrollment->status === 'Enrolled' ? 'success' : ($enrollment->status === 'Completed' ? 'primary' : 'danger') }}-emphasis">{{ $enrollment->status }}</span></p>    
            </div>
        </div>

    </div>
@endsection