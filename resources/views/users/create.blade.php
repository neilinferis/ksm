@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="text-center">New Students</h3>
        </div>
        <div class="row card-body">
            <div class="col-8 mx-auto"> 
                <form action="{{ route('user.store') }}" method="post">
                    @csrf

                    <label for="first-name" class="form-label">First Name</label>
                    <input type="text" name="first_name" id="first-name" class="form-control mb-3">

                    <label for="last-name" class="form-label">Last Name</label>
                    <input type="text" name="last_name" id="last-name" class="form-control mb-3">

                    <label for="email" class="form-label">Email</label>
                    <input type="text" name="email" id="email" class="form-control mb-3">

                    <label for="phone" class="form-label">Phone</label>
                    <input type="text" name="phone" id="phone" class="form-control mb-3" placeholder="e.g +639872342">

                    <label for="dob" class="form-label">Date of Birth</label>
                    <input type="date" name="dob" id="dob" class="form-control mb-3">

                    <label for="address" class="form-label">Address</label>
                    <input type="text" name="address" id="address" class="form-control mb-5">

                    <div class="text-end">
                        <a href="" class="btn btn-outline-warning me-3 w-25">Cancel</a>
                        <button type="submit" class="btn btn-success w-25">Create</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection