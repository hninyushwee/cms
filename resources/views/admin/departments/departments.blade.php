@extends('layout.master')
@section('content');
<div id="content">
<div class="container">
    <div class="row">
        <div class="col-md-2 ">
            <a href="{{route('departments.create')}}" class="btn btn-primary">Add Department</a>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-8">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Code</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($departments as $department)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$department->code}}</td>
                            <td>{{$department->name}}</td>
                            <td>{{$department->phone}}</td>
                            <td>
                                <a href="" class="btn btn-primary">Edit</a>
                                <a href="" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5">
                                <h5 class="text-warning fw-bold text-center">No Department Data</h5>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
@endsection
