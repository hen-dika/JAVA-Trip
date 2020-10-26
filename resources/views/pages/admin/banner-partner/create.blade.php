@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add Banner</h1>
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
                <form action="{{ route('banner-partner.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">Partner Name</label>
                        <input type="text" name="name" id="name" placeholder="Partner Name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="link">Link URL</label>
                        <input type="text" name="link" id="link" placeholder="Partner link" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" class="form-control" name="image" placeholder="Image" >
                    </div>
                    <div class="row">
                        <div class="col-6">
                           <button type="submit" class="btn btn-outline-secondary btn-block" name="status" value="inactive">
                                Draft
                            </button> 
                        </div>
                        <div class="col-6">
                           <button type="submit" class="btn btn-primary btn-block" name="status" value="active">
                                Publish
                            </button> 
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
@endsection
