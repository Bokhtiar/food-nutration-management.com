@extends('layouts.user.app')
@section('title', 'Health')
@section('user_content')
<section class="container">
    <div class="pagetitle container">
        <h1>Health Detail</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item">Health</li>
            <li class="breadcrumb-item active">Health Detail</li>
          </ol>
        </nav>
      </div><!-- End Page Title -->
    <section class="container">
        <div class="row my-5">
            <div class="col-sm-12 col-md-8 col-lg-8">
                <h3>HEALTH</h3>
                <img src="{{ asset('user') }}/imgs/la.PNG" height="350px" width="100%" alt="">
                <hr>

                <div class="row">
                    <div class="col-sm-12 col-md-4 col-lg-4 text-center">
                        <div class="card " style="width: 14rem;">
                            <div class="text-center news mt-3">
                                <img src="{{ asset('user') }}/imgs/b2.jpg"  class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                              <p class="card-text h4">Member.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-4 text-center">
                        <div class="card " style="width: 14rem;">
                            <div class="text-center news mt-3">
                                <img src="{{ asset('user') }}/imgs/b1.jpg"  class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                              <p class="card-text h4">Health Professional.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-4 text-center">
                        <div class="card " style="width: 14rem;">
                            <div class="text-center news mt-3">
                                <img src="{{ asset('user') }}/imgs/b3.jpg"  class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                              <p class="card-text h4">Student.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4">
                <H3>LATEST NEWS</H3>
                <section>
                    @foreach ($news as $item)
                    <div class="row">

                        <div class="col-md-4 col-lg-4 col-sm-12">
                            @php
                            $image = json_decode(@$item->image);
                            @endphp

                            @if(empty($image))
                                <td>Image Not Selected</td>
                            @else
                            <img src="{{asset($image[0])}}" height="60px" width="100%" alt="">
                            @endif

                        </div>
                        <div class="col-md-8 col-lg-8 col-sm-12">
                            <p><a href="@route('news/show', $item->id)">{{ $item->title }}</a>
                            </p>
                        </div>

                </div>
                <hr>
                    @endforeach


                </section>
            </div>
        </div>
      </section>
    <!--latest news end here-->
</section>

@endsection
