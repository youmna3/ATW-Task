@extends('layouts.layouts')
@section('content')
    <h2>Edit company</h2>
    <form method="POST" action="{{ url('companies/' . $company->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="col-4">
            <label>Company Name</label>

            <input class="form form-control" name="name" value="{{ old('name', $company->name) }}" />
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <label>Company Email</label>

            <input class="form form-control" name="email" value="{{ old('email', $company->email) }}" />
            @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <label>logo</label>
            <input name="logo" type="file" /><br />
            @error('logo')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <label>Website</label>
            <input class="form form-control" name="website" value="{{ old('website', $company->website) }}" /><br />
            @error('website')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <button class="btn btn-success">update</button>
            <a class="btn btn-secondary" href="{{ url('/companies') }}">Cancel</a>
        </div>
    </form>
@endsection
