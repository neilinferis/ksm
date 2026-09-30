@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="mb-4">
            <h4 class="fw-semibold mb-1">Delete Grade</h4>
            <p class="text-muted mb-0">Please confirm that you want to remove this grade.</p>
        </div>

        <div class="card border-0 border-start border-4 border-danger shadow-sm rounded-3">
            <div class="card-body p-4">

                <div class="alert alert-danger" role="alert">
                    This action cannot be undone.
                </div>

                <div class="row mb-4 gy-2">
                    <p>{{ $grade->enrollment->user->first_name }} {{ $grade->enrollment->user->last_name }} - {{ $grade->enrollment->course->course_code }}</p>
                    <p>{{ $grade->enrollment->course->name }}</p>
                    <p>{{ $grade->grade }}</p>
                    <p>{{ $grade->remarks }}</p>
                </div>

                <form action="{{ route('grades.destroy', $grade->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger px-4">Yes, Delete</button>
                    <a href="{{ route('grades.index') }}" class="btn btn-light border px-4">Cancel</a>
                </form>

            </div>
        </div>

    </div>
@endsection