@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Banner</h1>
      </div>

      <!-- Content Row -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="card shadow">
            <div class="card-body">
                <form action="{{ route('banner-partner.update', $banner->id) }}" method="post" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="name">Partner Name</label>
                        <input type="text" name="name" id="name" placeholder="Partner Name" class="form-control" value="{{ $banner->name }}">
                    </div>
                    <div class="form-group">
                        <label for="link">Link URL</label>
                        <input type="text" name="link" id="link" placeholder="Partner link" class="form-control" value="{{ $banner->link }}">
                    </div>
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" class="form-control" name="image" placeholder="Image" value="{{ $banner->image }}">
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <select name="status" id="status" class="form-control">
                            <option value="active" {{ ($banner->status == 'active') ? 'selected' : '' }}>Active</option>
                            <option value="inactive" {{ ($banner->status == 'inactive') ? 'selected' : '' }}>In active</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">
                        Update
                    </button>
                </form>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
@endsection
