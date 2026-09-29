@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="row card-header">
            <div class="col-4"></div>
            <div class="col-4"><h3 class="text-center">List of Courses</h3></div>
            <div class="col-4"><h6 class="text-end mt-2"><a href="{{ route('course.create') }}" class="text-decoration-none">New Course</a></h6></div>
        </div>
        <div class="row card-body">
            <div class="col-12">
                <div class="card-body px-0 pb-0 overflow-y-auto">
                    @if (count($all_courses) == 0)
                        <div class="card text-center w-25 mx-auto m-5 text-info border-0">
                            <div class="card-body">
                                <h4 class="my-5">No Courses</h4>
                            </div>
                        </div>
                    @else
                        <table class="table table-sm table-striped align-middle">
                            <thead>
                                <tr>
                                    <th class="text-secondary">id</th>
                                    <th class="text-secondary">last_name</th>
                                    <th class="text-secondary">first_name</th>
                                    <th class="text-secondary">middle_name</th>
                                    <th class="text-secondary">dob</th>
                                    <th>actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($all_courses as $course)
                                    <tr>
                                        <td>{{ $course->id }}</td>                                        
                                        <td>{{ $course->course_code }}</td>                                        
                                        <td>{{ $course->name }}</td>                                        
                                        <td>{{ $course->description }}</td>                                        
                                        <td>{{ $course->units }}</td>                                             
                                        <td>

                                        </td>                                        
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection