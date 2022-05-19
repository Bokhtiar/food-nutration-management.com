@extends('layouts.admin.app')
@section('title', 'BMI Create')
    @section('css')
    @endsection

        @section('admin_content')

        <div class="pagetitle">
            <h1>Form Editors</h1>
            <nav>
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">BMI</li>
                <li class="breadcrumb-item active">Create BMI</li>
              </ol>
            </nav>
          </div><!-- End Page Title -->

        <div class="card">
            <div class="card-body">
                <x-notification></x-notification>
                @if (@$edit)0
                <form action="@route('admin.bmi.update', $edit->id)" method="POST" enctype="multipart/form-data">
                    @method('put')
                @else
                <form action="@route('admin.bmi.store')" method="POST" enctype="multipart/form-data">
                    @method('POST')
                @endif
                @csrf
                <h5 class="card-title">{{ @$edit ? 'BMI Update Form' : 'BMI Create Form'}}</h5>

                <div class="row">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="form-gorup my-2">
                            <label for="">Start <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="start" required value="{{ @$edit->start }}" placeholder="start" id="">
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="form-gorup my-2">
                            <label for="">end <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="end" required value="{{ @$edit->end }}" placeholder="end" id="">
                        </div>
                    </div>
                </div>

                <div class="form-gorup">
                <label for="">Food Description :  <span class="text-danger">*</span></label>
                    <!-- Editor -->
                <textarea name="description" class="tinymce-editor">
                    {!! @$edit->description !!}
                </textarea><!-- End Editor -->
                </div>

                <div class="form-group my-2 float-right">
                    <input type="submit" value="Create BMI" class="btn btn-info text-light" id="">
                </div>
              </form>

            </div>
          </div>



    @section('css')
    @endsection
@endsection
