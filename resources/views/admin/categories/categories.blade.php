@extends('layout.master')
@section('content');
<div id="content">
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <a href="{{route('categories.create')}}" class="btn btn-primary">Add new Category</a>
        </div>
        <div class="col-md-3">
            <a href="{{route('categories.restore')}}" class="btn btn-primary">Restore All</a>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-12">
            @if($message=Session::get('success'))
            <span class="alert alert-success d-block w-100">{{$message}}</span>
            @endif
            @if($message=Session::get('error'))
            <span class="alert alert-danger d-block w-100">{{$message}}</span>
            @endif
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Category</th>
                        <th>Parent Category</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($categories as $category)
                        <tr>
                            <td>{{++$i}}</td>
                            <td>{{$category->name}}</td>
                            @if($category->parent == null)
                                <td>____</td>
                            @else
                                <td>{{$category->parent->name}}</td>
                            @endif
                            <td data-url="{{route('categories.destroy',$category->id)}}">
                                <a href="{{route('categories.edit',$category->id)}}" class="btn btn-primary ">Edit</a>
                                {{-- <form action="{{route('categories.destroy',$category->id)}}" method="post">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-delete">Delete</button>
                                </form> --}}
                                <button type="submit" class="btn btn-danger btn-delete">Delete</button>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4">
                                <h5 class="text-warning fw-bold text-center">No Category Data</h5>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
    {{$categories->links()}}
</div>
</div>
@endsection
