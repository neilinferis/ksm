@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="text-center">New Course</h3>
        </div>
        <div class="row card-body">
            <div class="col-6 mx-auto"> 
                <form action="{{ route('course.store') }}" method="post">
                    @csrf

                    <label for="course-code" class="form-label">Course Code</label>
                    <input type="text" name="course_code" id="course-code" class="form-control mb-3">

                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" id="name" class="form-control mb-3">

                    <label for="description" class="form-label">Description</label>
                    <textarea name="description" id="description" class="form-control mb-3"></textarea>

                    <label for="units" class="form-label">Units</label>
                    <input type="number" name="units" id="units" class="form-control mb-5">

                    <div class="text-end">
                        <a href="" class="btn btn-outline-warning me-3 w-25">Cancel</a>
                        <button type="submit" class="btn btn-success w-25">Create</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection