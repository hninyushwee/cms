@extends('layout.master')
@section('content')
    <div id="content">
        <div class="container">
            <h3 class="text-center mt-5">Edit Category</h3>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <form action="{{ route('categories.update',$category->id) }}" method="post">
                        @method('put')
                        @csrf
                        <div>
                            <label for="name" class="form-label">Category Name</label>
                            <input type="text" class="form-control" name="name" value="{{ $category->name }}">
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mt-3">
                            <label for="parent" class="form-label">Parent Category</label>
                            <select name="parent_id" id="" class="form-control">
                                <option value="">No Parent</option>
                                @foreach ($parents as $parent)
                                    <option value="{{ $parent->id }}"
                                        @if ($parent->id == $category->parent_id) selected @endif>
                                        {{ $parent->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mt-3">
                            <button class="btn btn-primary">Update</button>
                        </div>
                    </form>
                    <div class="mt-3">
                        <a href="{{route('categories.index')}}" class="btn btn-dark"> << Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
