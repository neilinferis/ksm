@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="mb-4">
            <h4 class="fw-semibold mb-1">Edit Grade</h4>
            <p class="text-muted mb-0">Update the grade and remarks for this enrollment.</p>
        </div>

        <div class="card border-0 shadow-sm rounded-3">
            <div class="card-body p-4">
               <form action="{{ route('grades.update', $grade->id) }}" method="POST" class="row g-3">

                    @csrf
                    @method('PATCH')
                    <div class="col-12">
                        <label class="form-label fw-medium">Enrollment</label>
                        <select class="form-select" name="enrollment" required>
                            @foreach ($enrollments as $enrollment)
                                @if ($grade->enrollment_id === $enrollment->id)
                                    <option value="{{ $enrollment->id }}" selected>{{ $enrollment->user->first_name }} {{ $enrollment->user->last_name }}</option>
                                @else
                                    <option value="{{ $enrollment->id }}">{{ $enrollment->user->first_name }} {{ $enrollment->user->last_name }}</option>
                                @endif
                            @endforeach
                        </select>
                        @error('enrollment')
                            <div class="text-danger">{{ $message }}</div>   
                        @enderror
                    </div>

                    <div class="col-md-4">
                        <label class="form-label fw-medium">Grade</label>
                        <input type="number" step="0.01" class="form-control" placeholder="1.75" name="grade" value="{{ old('grade', $grade->grade)}}" required>
                         @error('grade')
                            <div class="text-danger">{{ $message }}</div>   
                        @enderror
                    </div>

                    <div class="col-md-8">
                        <label class="form-label fw-medium">Remarks</label>
                        <select class="form-select" name="remarks" required>
                           @if ($grade->remarks === 'Passed')
                               <option value="Passed" selected>Passed</option>
                               <option value="Failed">Failed</option>
                               <option value="Incomplete">Incomplete</option>
                            @elseif ($grade->remarks === 'Failed')
                               <option value="Passed">Passed</option>
                               <option value="Failed" selected>Failed</option>
                               <option value="Incomplete">Incomplete</option>
                            @elseif ($grade->remarks === 'Incomplete')
                               <option value="Passed">Passed</option>
                               <option value="Failed">Failed</option>
                               <option value="Incomplete" selected>Incomplete</option>  
                           @else
                               <option value="Passed">Passed</option>
                               <option value="Failed">Failed</option>
                               <option value="Incomplete">Incomplete</option>
                           @endif
                        </select>
                        @error('remarks')
                            <div class="text-danger">{{ $message }}</div>   
                        @enderror
                    </div>

                    <div class="col-12 pt-2">
                        <button type="submit" class="btn btn-primary px-4">Save</button>
                        <a href="{{ route('grades.index') }}" class="btn btn-light border px-4">Cancel</a>
                    </div>

                </form>
            </div>
        </div>

    </div>
@endsection