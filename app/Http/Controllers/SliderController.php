<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use Carbon\Carbon;

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
        Slider::insert([
            'product_description' => $product_description,
            'product_title' => $product_title,
            'slide_image' => 'default.jpg',
            'created_at' => Carbon::now(),
        ]);
        echo "done";
    }

}
