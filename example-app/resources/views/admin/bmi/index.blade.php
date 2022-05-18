
@extends('layouts.admin.app')
@section('title', 'BMI List')
@section('admin_content')


<div class="pagetitle">
    <h1>BMI Tables</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">BMI</li>
        <li class="breadcrumb-item active">BMI Table</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">
        <x-notification></x-notification>
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">BMI Table</h5>

            <!-- Table with stripped rows -->
            <table class="table datatable">
              <thead>
                <tr>
                  <th scope="col">SL</th>
                  <th scope="col">Start Bmi</th>
                  <th scope="col">End Bmi</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($bmis as $item)
                <tr>
                    <th scope="row">{{ $item->index + 1 }}</th>
                    <td>{{ $item->start }}</td>
                    <td>{{ $item->end }}</td>

                    <td class="form-inline">
                        <a class="btn btn-sm btn-info text-light" href="@route('admin.bmi.show', $item->id)"><i class="bi bi-eye"></i></a>
                        <a class="btn btn-sm btn-success text-light" href="@route('admin.bmi.edit', $item->id)"> <i class="bi bi-pencil-square"></i> </a>
                        <form method="POST" action="@route('admin.bmi.destroy', $item->id)">
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
