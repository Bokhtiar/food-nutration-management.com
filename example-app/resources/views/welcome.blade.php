@extends('layouts.user.app')

@section('user_content')


    <!--slider start here-->
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
        <div class="carousel-item active slider-img">
            <img src="{{ asset('user') }}/imgs/b1.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item slider-img">
            <img src="{{ asset('user') }}/imgs/b2.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item slider-img">
            <img src="{{ asset('user') }}/imgs/b3.jpg" class="d-block w-100" alt="...">
        </div>
        </div>
    <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-target="#carouselExampleControls" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
        </button>
    </div>
    <!--slider end here-->

    <!--latest news start here-->
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
                            <p>{{ $item->title }}</p>
                        </div>
                    </div>
                    <hr>
                    @endforeach




                </section>
            </div>
        </div>
    </section>
    <!--latest news end here-->

    <!--food start here-->
    <section class="container">
        <h3>FOOD SEAFTY</h3>
        <div class="row">
            <div class="col-sm-12 col-md-3 col-lg-3">
                <div class="card" style="width: 14rem;">
                    <img class="card-img-top" src="imgs/b2.jpg"  height="170px" alt="Card image cap">
                    <div class="card-body">
                    <h5 class="card-title">Food Poisoning</h5>
                    <p class="card-text">What is food poisoning, and how long does it last? Use these resources to learn about food poisoning symptoms, common causes, and what to do if you get sick.</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-3 col-lg-3">
                <div class="card" style="width: 14rem;">
                    <img class="card-img-top" src="imgs/b1.jpg"  height="170px" alt="Card image cap">
                    <div class="card-body">
                    <h5 class="card-title">Food Safety On the Go</h5>
                    <p class="card-text">Learn how to safely choose and handle food when getting food delivery, eating out, shopping for groceries, and packing meals and snacks to go.</p>
                    </div>
                </div>
            </div>


            <div class="col-sm-12 col-md-3 col-lg-3">
                <div class="card" style="width: 14rem;">
                    <img class="card-img-top" src="imgs/b3.jpg" height="170px" alt="Card image cap">
                    <div class="card-body">
                    <h5 class="card-title">Safe Food Preparation</h5>
                    <p class="card-text">Prevent contamination when preparing and serving meals by following these guidelines for cooking temperatures, food handling, and cleaning.</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-3 col-lg-3">
                <div class="card" style="width: 14rem;">
                    <img class="card-img-top" src="imgs/about.jpg"  height="170px"  alt="Card image cap">
                    <div class="card-body">
                    <h5 class="card-title">Safe Food Storage</h5>
                    <p class="card-text">Follow these tips for safely storing food in the freezer, refrigerator, and pantry to prevent foodborne germs from growing and keep it fresh for longer.</p>
                    </div>
                </div>
            </div>
        </div>


    </section>
    <!--food end here-->
@endsection
