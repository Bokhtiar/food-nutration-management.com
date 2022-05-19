@extends('layouts.user.app')
@section('title', 'Check Fitness')

@section('user_content')

<section class="container my-3">
    <section class="container my-4">
        <h1> CHECK FITNESS</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item">Check</li>
            <li class="breadcrumb-item active">Check Fitness</li>
          </ol>
        </nav>
      </div><!-- End Page Title -->
    <div class="contianer">
        <section class="section">
            <div class="row">
              <div class="col-lg-12">

                <div class="card">
                    <div class="card-header">
                        <p class="card-title h2">BMI: {{ $show->start .'<'.  $show->end}}</p>
                    </div>
                    <div class="card-body">


                        <div class="">
                            {!! $show->description !!}
                        </div>
                    </div>
                </div>

              </div>
            </div>
          </section>
    </div>
</section>

@endsection
