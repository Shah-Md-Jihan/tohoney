<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;

class FrontendController extends Controller
{
    public function index(){
        return view('index',[
            'sliders' => Slider::latest()->get()
        ]);
    }
}
