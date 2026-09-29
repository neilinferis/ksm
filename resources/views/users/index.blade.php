@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="row card-header">
            <div class="col-4"></div>
            <div class="col-4"><h3 class="text-center">New Students</h3></div>
            <div class="col-4"><h6 class="text-end mt-2"><a href="{{ route('user.create') }}" class="text-decoration-none">New Student</a></h6></div>
        </div>
        <div class="row card-body">
            <div class="col-12">
                <div class="card-body px-0 pb-0 overflow-y-auto">
                    @if (count($all_students) == 0)
                        <div class="card text-center w-25 mx-auto m-5 text-info border-0">
                            <div class="card-body">
                                <h4 class="my-5">No Students</h4>
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
                                    <th class="text-secondary">phone</th>
                                    <th class="text-secondary">email</th>
                                    <th class="text-secondary">address</th>
                                    <th>actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($all_students as $student)
                                    <tr>
                                        <td>{{ $student->id }}</td>                                        
                                        <td>{{ $student->first_name ? $student->first_name  : 'n/a' }}</td>                                        
                                        <td>{{ $student->last_name  ? $student->last_name  : 'n/a' }}</td>                                        
                                        <td>{{ $student->middle_name ? $student->middle_name  : 'n/a' }}</td>                                        
                                        <td>{{ $student->date_of_birth ? $student->date_of_birth  : 'n/a' }}</td>                                        
                                        <td>{{ $student->phone ? $student->phone  : 'n/a' }}</td>                                        
                                        <td>{{ $student->email }}</td>                                        
                                        <td>{{ $student->address ? $student->address  : 'n/a' }}</td>                                        
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