@extends('layouts.layouts')
@section('content')
    @extends('layouts.layouts')
@section('content')
    <h2>Edit Empolyee</h2>
    <form method="POST" action="{{ url('employees/' . $employee->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="col-4">
            <label>First Name</label>

            <input class="form form-control" name="first_name" value="{{ old('first_name', $employee->first_name) }}" />
            @error('first_name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <label>First Name</label>

            <input class="form form-control" name="last_name" value="{{ old('last_name', $employee->last_name) }}" />
            @error('last_name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <select class="form-control" name="company_id">
                <option>Category Name</option>
                @foreach ($companies as $company)
                    <option
                        value="{{ $company->id }}"{{ old('company_id', $employee->company_id) == $company['id'] ? 'Selected' : '' }}>
                        {{ $company->name }}</option>
                @endforeach
            </select>
            <label>Employee Email</label>
            <input class="form form-control" name="email" value="{{ old('email', $employee->company_id) }}" /><br />
            @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <label>Employee Phone</label>
            <input class="form form-control" name="phone" value="{{ old('phone', $employee->phone) }}" /><br />
            @error('phone')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <button class="btn btn-success">update</button>
            <a class="btn btn-secondary" href="{{ url('/employees') }}">Cancel</a>
        </div>
    </form>
@endsection
