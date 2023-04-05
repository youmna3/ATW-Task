@extends('layouts.layouts')
@section('content')
    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
        </div>
    @endif
    <a class="btn btn-success" href="{{ url('employees/create') }}">Add</a>
    <table class="table table-bordered table-striped text-center ">
        <thead class="thead-dark">
            <tr>
                <th>Id</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Company</th>
                <th>Email</th>
                <th>Phone</th>
                <th>EDIT</th>
                <th>DELETE</th>

            </tr>
        </thead>
        <tbody>
            <tr>
                @foreach ($employees as $employee)
                    <td>{{ $employee['id'] }}</td>
                    <td>{{ $employee['first_name'] }}</td>
                    <td>{{ $employee['last_name'] }}</td>
                    <td>{{ $employee['company']['name'] }}</td>
                    <td>{{ $employee['email'] }}</td>
                    <td>{{ $employee['phone'] }}</td>
                    <td><a href="{{ 'employees/' . $employee['id'] . '/edit' }}" class="btn btn-success">EDIT</a>
                    </td>
                    <td>
                        <form action="{{ url('employees/' . $employee['id']) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button onclick="return confirm('Are you sure?')" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {!! $employees->links() !!}
@endsection
