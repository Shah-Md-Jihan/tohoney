<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use Carbon\Carbon;
use Image;

class SliderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function addslider(){
        return view('dashboard/add_slider');
    }

    public function addsliderpost(Request $request){
        $request->validate([
            'product_description' => 'required',
            'product_title' => 'required',
            'slide_image' => 'required|image',
        ]);
        $product_description = $request->product_description;
        $product_title = $request->product_title;
        $product_image = $request->file('slide_image');
        $slider_id = Slider::insertGetId([
            'product_description' => $product_description,
            'product_title' => $product_title,
            'slide_image' => 'default.jpg',
            'created_at' => Carbon::now(),
        ]);
        // slider image upload
        $slider_image_name = $slider_id.".".$product_image->getClientOriginalExtension();
        $slider_image_location = base_path('public/uploads/slider/'.$slider_image_name);
        Image::make($product_image)->resize(1680,800)->save($slider_image_location);
        
        Slider::find($slider_id)->update([
            'slide_image' => $slider_image_name
        ]);
        return back()->with('slider_add_alert', 'Slider item added successfully!');
    }

    // method listSlider start
    public function listSlider(){
        return view('dashboard.list_slider',[
            'sliders' => Slider::latest()->get(),
        ]);
    }
}
