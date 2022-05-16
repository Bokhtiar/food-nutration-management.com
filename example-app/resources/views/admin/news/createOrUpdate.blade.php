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
              <form action="@route('admin.news.store')" method="POST" enctype="multipart/form-data">
                <h5 class="card-title">News Create Form</h5>

                <div class="form-gorup my-2">
                    <label for="">News Title <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="title" required value="{{ @$edit->title }}" placeholder="News Title Type Here" id="">
                </div>

                <div class="form-gorup my-2">
                  <label for="">News Image <span class="text-danger">*</span></label>
                  <input type="file" class="form-control" name="image" required value="">
              </div>

                <!-- Editor -->
                <textarea class="tinymce-editor">
                </textarea><!-- End Editor -->
              </form>

            </div>
          </div>



    @section('css')
    @endsection
@endsection
