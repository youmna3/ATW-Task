@extends('layouts.layouts')
@section('content')
    <h2>Add company</h2>
    <form method="POST" action="{{ url('companies') }}" enctype="multipart/form-data">
        @csrf
        <div class="col-4">
            <label>Company Name</label>

            <input class="form form-control" name="name" value="{{ old('name') }}" />
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <label>Company Email</label>

            <input class="form form-control" name="email" value="{{ old('email') }}" />
            @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <label>logo</label>
            <input name="logo" type="file" /><br />
            @error('logo')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <label>Website</label>
            <input class="form form-control" name="website" value="{{ old('website') }}" /><br />
            @error('website')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <button class="btn btn-success">Add</button>
            <a class="btn btn-secondary" href="{{ url('/companies') }}">Cancel</a>
        </div>
    </form>
@endsection
