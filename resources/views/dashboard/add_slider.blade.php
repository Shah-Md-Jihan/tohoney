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
            <div class="card text-bg-light mb-3">
                <div class="card-header bg-success text-white"><h5>Add Slider</h5></div>
                <div class="card-body">
                  @if (session('slider_add_alert'))
                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{ session('slider_add_alert') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                  @endif
                    <form action="{{ route('addsliderpost') }}" method="post" enctype="multipart/form-data">
                      @csrf
                        <div class="mb-3">
                            <label class="form-label">Product Title</label>
                            <input type="text" name="product_title" class="form-control" placeholder="Please add Product title!" value="{{ old('product_title') }}">
                            @error('product_title')
                                <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Product Description</label>
                            <textarea name="product_description" class="form-control" rows="4" placeholder="Please add product description!">{{ old('product_description') }}</textarea>
                            @error('product_description')
                                <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Slide Image</label>
                            <input type="file" name="slide_image" class="form-control">
                            @error('slide_image')
                                <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
          </div> <!-- col-12 end -->
        </div><!-- row -->

        

      </div><!-- sl-pagebody -->
@endsection