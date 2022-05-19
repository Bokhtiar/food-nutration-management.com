@extends('layouts.admin.app')

@section('admin_content')

<div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section dashboard">
    <div class="justify-content-center row">
        <div class="col-md-7">
        <img height="200px" width="200px" src="{{ asset('sd.PNG') }}" alt="">
            <p>
               Name:  {{ $user->name }} <br>
            </p>
        </div>
    </div>
  </section>
@endsection
