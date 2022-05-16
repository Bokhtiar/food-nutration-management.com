@extends('layouts.admin.app')
@section('title', 'News Create Page')
    @section('css')
    @endsection

        @section('admin_content')

        <div class="pagetitle">
            <h1>Form Editors</h1>
            <nav>
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">News</li>
                <li class="breadcrumb-item active">Create News</li>
              </ol>
            </nav>
          </div><!-- End Page Title -->

        <div class="card">
            <div class="card-body">

                @if (@$edit)
                <form action="@route('admin.news.update', $edit->id)" method="POST" enctype="multipart/form-data">
                    @method('put')
                @else
                <form action="@route('admin.news.store')" method="POST" enctype="multipart/form-data">
                    @method('POST')
                @endif
                @csrf
                <h5 class="card-title">{{ @$edit ? 'News Update Form' : 'News Create Form'}}</h5>

                <div class="form-gorup my-2">
                    <label for="">News Title <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="title" required value="{{ @$edit->title }}" placeholder="News Title Type Here" id="">
                </div>

                <div class="form-gorup my-2">
                  <label for="">News Image <span class="text-danger">*</span></label>
                  <input type="file" class="form-control" name="image[]" multiple required value="">
                </div>

                <div class="form-gorup">
                <label for="">News Description <span class="text-danger">*</span></label>
                    <!-- Editor -->
                <textarea name="description" class="tinymce-editor">
                </textarea><!-- End Editor -->
                </div>

                <div class="form-group my-2 float-right">
                    <input type="submit" value="Create News" class="btn btn-info text-light" id="">
                </div>
              </form>

            </div>
          </div>



    @section('css')
    @endsection
@endsection
