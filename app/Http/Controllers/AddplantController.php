<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddplantController extends Controller
{
    public function dashhomeform(){
        return view("admindashboard/addPlantView");
    }
}
