@extends('layouts.user.app')
@section('title', 'Contact')
@section('user_content')

 <!--about start here-->
 <section class="container my-5">
    <div class="row">
      <div class="col-sm-12 col-md-7 col-lg-7">
        <img src="{{ asset('user') }}/imgs/about.jpg" height="200px" width="100%" alt="">
      </div>
      <div class="col-sm-12 col-md-4 col-lg-4">
        <div class="card">
          <div class="card-header">
            <div class="card-title">FOOD &
              NUTRITION</div>
          </div>
          <div class="card-body">
            <p>We are dedicated to addressing food insecurity for homebound seniors and other vulnerable neighbors. We provide food and pantry items to those in need, including thousands of nutritious meals prepared in our onsite kitchen each week. </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--about end here-->

  <!--contact start here-->
  <section class="container my-2">
    <div class="row">
      <div class="col-md-4 col-lg-4 col-sm-12 ">
        <div class="card">
          <div class="card-header">
            <div class="card-title">
              Contact Form
            </div>
          </div>
          <div class="card-body">
            <div class="form-group">
              <label for="">Type Here Name <span class="text-danger">*</span></label>
              <input type="text" class="form-control" name="name" placeholder="type here name" id="">
            </div>

            <div class="form-group">
              <label for="">Type Here E-mail <span class="text-danger">*</span></label>
              <input type="email" class="form-control" name="email" placeholder="type here email" id="">
            </div>

            <div class="form-group">
              <label for="">Type Here Text <span class="text-danger">*</span></label>
              <textarea placeholder="body" name="body" id="" cols="10" rows="4" class="form-control"></textarea>
            </div>

            <div class="form-group">
              <input type="submit" class="btn btn-outline-success btn-submit" value="submit" name="" id="">
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-8 col-lg-8 col-sm-12 ">
        <div class="mapouter"><div class="gmap_canvas"><iframe width="712" height="338" id="gmap_canvas" src="https://maps.google.com/maps?q=saver%20dhaka&t=&z=11&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://fmovies-online.net">fmovies</a><br><style>.mapouter{position:relative;text-align:right;height:338px;width:712px;}</style><a href="https://www.embedgooglemap.net">google maps plugin html</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:338px;width:712px;}</style></div></div>
      </div>
    </div>
  </section>
  <!--contact end here-->

@endsection
