@extends('gnur.layout', ['title' => 'Todo List'])
@section('head')

@endsection
@section('content')
    <h1>ashfkasdfhakshfklashdfla</h1>
    <form action="{{ route('profile.update') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="first_name">First Name</label>
            <input type="text" name="first_name" class="form-control" value="{{ $profile->first_name }}">
        </div>

        <div class="form-group">
            <label for="last_name">Last Name</label>
            <input type="text" name="last_name" class="form-control" value="{{ $profile->last_name }}">
        </div>

        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" name="address" class="form-control" value="{{ $profile->address }}">
        </div>

        <div class="form-group">
            <label for="phone_number">Phone Number</label>
            <input type="text" name="phone_number" class="form-control" value="{{ $profile->phone_number }}">
        </div>

        <button type="submit" class="btn btn-primary">Update Profile</button>
    </form>
    
@endsection
