@extends('layout.master')
@section('content');
<div id="content">
<div class="container">
    <div class="row">
        <div class="col-md-2 ">
            <a href="{{route('roles.create')}}" class="btn btn-primary">Add New Role</a>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-8">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($roles as $role)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$role->name}}</td>
                            <td>
                                <a href="" class="btn btn-primary">Edit</a>
                                <a href="" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4">
                                <h5 class="text-warning fw-bold text-center">No Role Data</h5>
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
