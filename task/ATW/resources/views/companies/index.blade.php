@extends('layouts.layouts')
@section('content')
    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
        </div>
    @endif
    <a class="btn btn-success" href="{{ url('companies/create') }}">Add</a>
    <table class="table table-bordered table-striped text-center ">
        <thead class="thead-dark">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>logo</th>
                <th>Website</th>
                <th>Edit</th>
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
                    <td><a href="{{ $company->website }}">{{ $company->website }}</a></td>
                    <td><a href="{{ 'companies/' . $company['id'] . '/edit' }}" class="btn btn-success">EDIT</a>
                    </td>
                    <td>
                        <form action="{{ url('companies/' . $company['id']) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button onclick="return confirm('Are you sure?')" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {!! $companies->links() !!}
@endsection
