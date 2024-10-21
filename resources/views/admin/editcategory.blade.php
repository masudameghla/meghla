@extends('admin.layouts.template')
@section('page_title')
    editcategory
@endsection
@section('content')
    <div class="cotainer-xxl flex-grow-1 container-p-y">
        <div class="container">
        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light">pages/</span>
            Edit Category
        </h4>
        <div class="col-xxl">
            <div class="card mb-4">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="mb-0">Edit Category</h5>
                    <small class="text-muted float-end">Input Information</small>
                </div>

                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            
                <div class="card-body">
                    <form action="{{ route('updatecategory') }}" method="POST">
                        @csrf
                        <input type="hidden" name="category_id" value="{{ $cat_info->id }}">

                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-lebel" for="basic-defalt-name">Category Name</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="category_name" name="category_name" value="{{ $cat_info->category_name }}">
                        </div>
                        </div>
                        <div class="row justify-content-end">
                            <div class="col-sm-3">
                                <button type="submit" class="btn btn-primary">Update Category</button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection