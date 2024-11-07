@extends('layout.master')
@section('content')
    <div id="content">
        <div class="container">
            <h3 class="text-center mt-5">Create New Category</h3>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <form action="{{ route('categories.store') }}" method="post">
                        @csrf
                        <div>
                            <label for="name" class="form-label">Category Name</label>
                            <input type="text" class="form-control" name="name">
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mt-3">
                            <label for="parent" class="form-label">Parent Category</label>
                            <select name="parent_id" id="" class="form-control">
                                <option value="">No Parent</option>
                                @foreach ($parents as $parent)
                                    <option value="{{ $parent->id }}">{{ $parent->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mt-3">
                            <button class="btn btn-primary">Create</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
