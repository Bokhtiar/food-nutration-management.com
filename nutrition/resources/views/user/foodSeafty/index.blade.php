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

    <h3>FOOD SEAFTY</h3>
    <div class="row">
        @foreach ($seafties as $item)
            <div class="col-sm-12 col-md-3 col-lg-3 my-2">
                <div class="card" style="width: 14rem;">
                    @php
                    $image = json_decode(@$item->image);
                    @endphp

                    @if(empty($image))
                        <td>Image Not Selected</td>
                    @else
                        <img class="card-img-top" src="{{asset($image[0])}}"  height="170px" alt="Card image cap">
                    @endif


                    <div class="card-body">
                    <h5 class="card-title"><a href="@route('food-seafty.show', $item->id)">{{ $item->title }}</a></h5>
                    </div>
                </div>
            </div>
        @endforeach
</section>
<!--food end here-->


@endsection
