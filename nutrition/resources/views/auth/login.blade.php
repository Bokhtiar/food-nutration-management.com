@extends('layouts.user.app')

@section('user_content')

<section class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3>Nutrition Login Form</h3>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                    <div class="row">
                        <div class="col-md-5 col-lg-5 col-sm-12 my-5">
                            <img src="{{ asset('user') }}/imgs/la.PNG" width="100%" alt="">
                        </div>
                        <div class="col-md-5 col-lg-5 col-sm-12">
                            <section>
                                <form action="" class="form-gorup">
                                    <div class="form-group">
                                        <label for="email" class="col-md-12 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                        <div class="col-md-12">
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <label for="password" class="col-md-12 col-form-label text-md-end">{{ __('Password') }}</label>

                                    <div class="col-md-12">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group my-2 text-center">
                                        <input type="submit" class="btn btn-sm btn-submit btn-outline-success" name="" id="">
                                    </div>
                                </form>
                            </section>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
