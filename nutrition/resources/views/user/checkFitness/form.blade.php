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
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    CHECK YOUR FITNESS
                </div>
                <div class="card-body">
                    <form method="POST" class="form-group" action="@route('check.fitness.calculate')">
                       @csrf
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="">Type Here Weight <span class="text-denger">*</span></label>
                                <input type="text" class="form-control" name="weight" placeholder="weight" required id="">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Type Here height <span class="text-denger">*</span></label>
                                <input type="text" class="form-control" name="height" placeholder="height(fit)" required id="">
                            </div>
                        </div>

                        <div class="text-center">
                            <input type="submit" name="" class="btn btn-outline-success btn-submit" value="Check">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
