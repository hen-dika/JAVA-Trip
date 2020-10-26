@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">About</h1>
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
                <form action="{{ route('about-update', $about->id) }}" method="post" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="meta_title">Meta Title</label>
                        <input type="text" name="meta_title" id="meta_title" class="form-control" value="{{ $about->meta_title }}">
                    </div>
                    <div class="form-group">
                        <label for="meta_keyword">Link URL</label>
                        <input type="text" name="meta_keyword" id="meta_keyword" placeholder="Partner link" class="form-control" value="{{ $about->meta_keyword }}">
                    </div>
                    <div class="form-group">
                        <label for="meta_description">Image</label>
                        <textarea class="form-control" name="meta_description">{{ $about->meta_description }}</textarea>
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
