<?php

namespace App\Http\Controllers\Admin\main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
   public function __invoke()
   {
       return view('admin.main.index');
   }
}
