@extends('layouts.layouts')
@section('content')
    <a class="btn btn-success" href="{{ url('companies/create') }}">Add</a>
    <table class="table table-bordered table-striped text-center ">
        <thead class="thead-dark">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>logo</th>
                <th>Website</th>
                <th>DELETE</th>

            </tr>
        </thead>
        <tbody>
            <tr>
                @foreach ($companies as $company)
                    <td>{{ $company['id'] }}</td>
                    <td>{{ $company['name'] }}</td>
                    <td>{{ $company['email'] }}</td>
                    <td><img src="{{ asset('storage/' . $company->logo) }}"width="100px" /></td>
                    <td>{{ $company['website'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {!! $companies->links() !!}
@endsection
