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
          <div class="col-8 m-auto">
            <div class="card text-bg-success mb-3">
                <div class="card-header"><h5 class="text-white">Add Slider</h5></div>
                <div class="card-body">
                    <form action="{{ route('addsliderpost') }}" method="post">
                      @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Slider Title</label>
                            <input type="text" name="slide_title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Please add your slider title!">
                        </div>
                        <div class="mb-3">
                            <label for="slider_desc">Slider Description</label>
                            <textarea name="slide_description" class="form-control" id="slider_desc" rows="4" placeholder="Please add your slider description!"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="slide_image" class="form-label">Slide Image</label>
                            <input type="file" name="slide_image" class="form-control" id="slide_image">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
          </div> <!-- col-12 end -->
        </div><!-- row -->

        

      </div><!-- sl-pagebody -->
@endsection