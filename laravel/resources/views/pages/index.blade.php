@extends('layouts')
@section('content')

<div class="container">
    <h3 class="text-center mt-5 mb-4 text-primary">Employee Management</h3>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg">
                <div class="card-body">
                    <h5 class="card-title text-center mb-4">Register Employee</h5>
                    <form method="POST" action="{{ route('employee.store') }}">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="fw-bold">Employee Name</label>
                                <input type="text" class="form-control" name="emp_name" placeholder="Enter employee name">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="fw-bold">Employee DOB</label>
                                <input type="date" class="form-control" name="dob">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="fw-bold">Phone</label>
                            <input type="text" class="form-control" name="phone" placeholder="Enter phone number">
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-success">
                                <i class="fa fa-user-plus"></i> Register
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="table-responsive mt-5">
                <table class="table table-bordered table-hover shadow-sm text-center">
                    <thead class="bg-dark text-white">
                        <tr>
                            <th>#</th>
                            <th>Employee Name</th>
                            <th>DOB</th>
                            <th>Phone</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($employees as $key => $employee)
                            <tr>
                                <td>{{ ++$key }}</td>
                                <td>{{ $employee->emp_name }}</td>
                                <td>{{ $employee->dob }}</td>
                                <td>{{ $employee->phone }}</td>
                                <td>
                                    <a href="{{ route('employee.edit', $employee->id) }}" class="btn btn-primary btn-sm">
                                        <i class="fa fa-edit"></i> Edit
                                    </a>
                                    
                                    <form action="{{ route('employee.destroy', $employee->id) }}" method="POST" style="display:inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">
                                            <i class="fa fa-trash"></i> Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


@endsection