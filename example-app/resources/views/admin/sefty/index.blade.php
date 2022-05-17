
@extends('layouts.admin.app')
@section('admin_content')


<div class="pagetitle">
    <h1>Seafty Tables</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">Seafty</li>
        <li class="breadcrumb-item active">Seafty Table</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">
        <x-notification></x-notification>
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Seafty Table</h5>

            <!-- Table with stripped rows -->
            <table class="table datatable">
              <thead>
                <tr>
                  <th scope="col">SL</th>
                  <th scope="col">Title</th>
                  <th scope="col">Image</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($seaftys as $item)
                <tr>
                    <th scope="row">{{ $item->index + 1 }}</th>
                    <td>{{ $item->title }}</td>
                    <td>
                        @php
                        $image = json_decode(@$item->image);
                        @endphp

                        @if(empty($image))
                            <td>Image Not Selected</td>
                        @else
                            <img src="{{asset($image[0])}}" height="100px" width="100px" alt="">
                        @endif
                    </td>
                    <td class="form-inline">
                        <a class="btn btn-sm btn-info text-light" href="@route('admin.news.show', $item->id)"><i class="bi bi-eye"></i></a>
                        <a class="btn btn-sm btn-success text-light" href="@route('admin.news.edit', $item->id)"> <i class="bi bi-pencil-square"></i> </a>
                        <form method="POST" action="@route('admin.news.destroy', $item->id)">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-sm btn-danger"><i class="bi bi-x-square"></i></button>
                        </form>
                    </td>
                </tr>
                @endforeach
              </tbody>
            </table>
            <!-- End Table with stripped rows -->

          </div>
        </div>

      </div>
    </div>
  </section>

@endsection
