@extends('layouts.user.app')
@section('title', 'Food Seafty')

@section('user_content')

<section class="container my-4">
    <h1>Food Seafty</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">Food</li>
        <li class="breadcrumb-item active">Food Seafty</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
            <div class="card-header">
                <p class="card-title h2">{{ $show->title }}</p>
            </div>
            <div class="card-body">
                @php
                $image = json_decode(@$show->image);
                @endphp

                @if(empty($image))
                    <td>Image Not Selected</td>
                @else
                    <img src="{{asset($image[0])}}" height="300px" width="100%" alt="">
                @endif

                <div class="">
                    {!! $show->description !!}
                </div>
            </div>
        </div>

      </div>
    </div>
  </section>


@endsection
