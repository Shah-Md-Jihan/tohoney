@extends('layouts.dashboard_master')

@section('dashboard_content')
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="{{ route('home') }}">Dashboard</a>
        <span class="breadcrumb-item active">Add Slider</span>
      </nav>

      <div class="sl-pagebody">

        <div class="row row-sm">
          <div class="col-12 m-auto">
            <div class="card text-bg-light mb-3">
                <div class="card-header bg-purple text-white"><h5>Slider Content List</h5></div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">sl no.</th>
                            <th scope="col">Product Name</th>
                            <th scope="col">Slider Description</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @php
                                $flag = 1;
                            @endphp
                            @foreach ($sliders as $slider)          
                                <tr>
                                    <th scope="row">{{ $flag++}}</th>
                                    <td>{{ $slider->product_title }}</td>
                                    <td>{{ $slider->product_description }}</td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                            <button type="button" class="btn btn-danger btn-sm">Delete</button>
                                            <button type="button" class="btn btn-warning btn-sm">Edit</button>
                                            </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
          </div> <!-- col-12 end -->
        </div><!-- row -->

        

      </div><!-- sl-pagebody -->
@endsection