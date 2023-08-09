<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashLayoutController extends Controller
{
    public function dashlayoutfun(){
        return view("Layouts/dashlayout");
    }
}
